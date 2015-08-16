# Carry your balls

Script utilisé pour https://twitter.com/CarryYourBalls
De la merde, je le conçois, il fonctionne avec https://github.com/abraham/twitteroauth et il faut mettre ses tokens (app + user) dans le fichier 'key.php'.

Le fichier refresh.py est là pour actualiser la page php du script, les tâches cron ne fonctionnaient pas sur mon serveur.
- - -
## Problémes
Limitation de l'api Twitter. Les messages du type "DM @[nom] [messages]" qui spam une personne de DM.