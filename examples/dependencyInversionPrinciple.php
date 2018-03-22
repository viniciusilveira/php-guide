<?php
class Email
{
    public function send($message)
    {
        //lógica
    }
}

class Notification
{
    public __construct()
    {
        $this->message = new Email;
    }

    public function send($message)
    {
        $this->message->send($message)
    }
}

/*
 * Resolvendo com inversão de dependência
 */

interface MessageInterface
{
    public function send($message);
}
class Email implements MenssageInterface
{
    public function send($message)
    {
        //lógica
    }
}

class Notification
{
    public __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    public function send($message)
    {
        $this->message->send($message)
    }
}
