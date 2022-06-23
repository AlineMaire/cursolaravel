<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Livro;

class CreateLivroMail extends Mailable
{
    use Queueable, SerializesModels;
    private $livro;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Livro $livro)
    {
        $this->livro = $livro;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails/create_livro')
        ->to('flavialima2002@usp.br')
        ->subject($this->livro->titulo)
        ->with([
            'livro' => $this->livro
        ]);
    }
}
