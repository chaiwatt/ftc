<?php

namespace App\Notifications;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderPlacedNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $package;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($package)
    {
        $this->package = $package;

        if ($this->package['payload']['data']['status'] == 'successful' && $this->package['reciever_name'] == 'Admin'){
            Transaction::where('charge_id',trim($this->package['payload']['data']['id']))->where('source_id',trim($this->package['payload']['data']['source']['id']))->update([
                'status' => trim($this->package['payload']['data']['status']),
            ]);
        }

        $this->delay(Carbon::now()->addSecond(10));
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // dd($this->package['payload']);



        // if ($this->package['payload']['data']['status'] == 'successful' && $this->package['reciever_name'] == 'Admin'){
        //     Transaction::where('charge_id',trim($this->package['payload']['data']['id']))->where('source_id',trim($this->package['payload']['data']['source']['id']))->update([
        //         'status' => trim($this->package['payload']['data']['status']),
        //     ]);
        // }

        $transaction = Transaction::where('charge_id',trim($this->package['payload']['data']['id']))
                    ->where('source_id',trim($this->package['payload']['data']['source']['id']))
                    ->first();

        return (new MailMessage)
                    ->from(env('MAIL_FROM_ADDRESS'), 'Full-stack Training Class')
                    ->subject($this->package['title'])
                    ->markdown("mail.customer", [
                        'transaction' => $transaction,
                      ]);
                    // ->subject('New order placed')
                    // ->line('Order placed ')
                    // // ->action('Notification Action', url('/'))
                    // ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
