<?php

    class Pass {
        private int $id;

        private int $amount;

        // timestamp du dernier passage
        private DateTime $timestamp;

        public function __construct(int $id, int $amount, DateTime $timestamp) {
            $this->id = $id;
            $this->amount = $amount;
            $this->timestamp = $timestamp;
        }

        // On veut un méthode scan qui va scanner la carte , qui contient l'algo
        // et décompter le nombre de ticket et met à jour le dernier timestamp
        public function scan(): void {
            $now = new DateTime();
            $interval = $now->getTimestamp() - $this->timestamp->getTimestamp();

            if ($this->amount > 0) {
                if ($interval <= 5400) {
                    // Prolonger la validité de 30 min
                    $this->timestamp->modify('+30 minutes');
                    echo "Validité prolongée de 30 min. Nouveau timestamp : {$this->timestamp->format('H:i:s')}\n";
                } else {
                    // Nouveau passage, décompte un ticket et remet la validité à maintenant
                    $this->amount--;
                    $this->timestamp = $now;
                    echo "Nouveau ticket décompté. Il reste {$this->amount} tickets.\n";
                }
            } else {
                echo "Pass #{$this->id} est épuisé.\n";
            }
        }

        // Une méthode canAccess pour vérifier si le pass est encore valide
        public function canAccess(DateTime $currentTime): bool {
            $interval = $currentTime->getTimestamp() - $this->timestamp->getTimestamp();
            return $this->amount > 0 && $interval <= 5400;
        }

    }