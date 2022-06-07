<?php

class User
{
        public $fistName;
        public $surname;
        public $email;

        /**
         * Mailer object
         * @var Mailer
         */
        protected $mailer;

        public function setMailer(Mailer $mailer)
        {
                $this->mailer = $mailer;
        }

        public function getFullName()
        {
                return trim($this->fistName . ' ' . $this->surname);
        }

        public function notify($message)
        {
                return $this->mailer->sendMessage($this->email, $message);
        }
}