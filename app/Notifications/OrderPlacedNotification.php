<?php

namespace App\Notifications;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use App\Models\MediaTransaction;
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
            $mediatransaction = new MediaTransaction();
            $mediatransaction->source_id = $this->package['payload']['data']['source']['id'];
            $mediatransaction->charge_id = $this->package['payload']['data']['id'];
            $mediatransaction->status = $this->package['payload']['data']['status'];
            $mediatransaction->paid_at = $this->package['payload']['data']['paid_at'];
            $mediatransaction->save();
            
            Transaction::where('charge_id',trim($this->package['payload']['data']['id']))->where('source_id',trim($this->package['payload']['data']['source']['id']))->update([
                'status' => trim($this->package['payload']['data']['status']),
                'paid_at' => trim($this->package['payload']['data']['paid_at']),
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
        $transaction = Transaction::where('charge_id',trim($this->package['payload']['data']['id']))
                    ->where('source_id',trim($this->package['payload']['data']['source']['id']))
                    ->first();

        return (new MailMessage)
                    ->from(env('MAIL_FROM_ADDRESS'), 'Full-stack Training Class')
                    ->subject($this->package['title'])
                    ->markdown("mail.template", [
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
