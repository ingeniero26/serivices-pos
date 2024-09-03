<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComposeEmailMail extends Mailable
{
    use Queueable, SerializesModels;
    public $save;
    /**
     * Create a new message instance.
     */
    public function __construct($save)
    {
        $this->save = $save;
    }

    public function build()
    {
        return $this->markdown('admin.email.compose_email_mail')->subject(config('app.name').', Nuevo Mensaje enviado');
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: $this->save->send_subject,
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //     markdown: 'emails.send_mail',
    //     with: [
    //         'user' => $this->save,
    //     ],
    // );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
