#Yii 2 Basic Project 

Adicionando alguma personalização às views do Yii2 para um design mais moderno:

##Passos:
1 - (colocar os itens (ex.: reveal) dentro de web/)

2 - (As partes padrão vão para views/layout)

3 - Não é recomendado colocar chamadas diretas aos css e js
Então adicione-os ao AppAsset e remova do main.php

4 - Utilizar todas as partes de js que vem nos layouts pode ser problemático com o Yii2
Então remova os js relacionados a bootstrap e jquery (AppAsset.php)


##Templates (layouts)
HTML https://github.com/learning-zone/website-templates.git