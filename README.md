### Funcionário

|id|tipouser|user|password|email|nome|morada|Nacionalidade|Naturalidade|BI|NIF|NIB|NISS|Contacto|Salario Liquido|
| :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :-------------|
|1|1|admin|admin|admin@gmail.com|Admin|teste|1|1|0000|0000|0000|0000|9333333333|550|
|2|1|admin2|admin|teste@gmail.com|Admin2|teste|1|1|0000|0000|0000|0000|9333333333|550|
|3|2|user|user|user@gmail.com|User|teste|2|4|0000|0000|0000|0000|9333333333|550|

### Paises

| id | pais |
| :------------- | :------------- |
|1 |Portuguesa |
|2 |Espanhola |
|4 |Francesa |
|5 |Canadiense |
|6 |Cabo Verdiense |

### Locais (Naturalidade)

| id_natur | Naturalidade    |
| :------------- | :------------- |
| 1 | Porto |
| 2 | Lisboa |
| 3 | Braga |
| 4 | Madrid |

### Tipo pagamento

|id_tipo |tipo|
| :------------- | :------------- |
| 1 | Salario |
| 2 | Subsidio Férias |
| 3 | Subsidio Natal |
| 4 | Bonus |

### Historico Pagamentos

|id_historico|id_user| id_tipo_pagamento |Data-pagamento| Detalhes |
| :------------- | :------------- |
| 1 | 3 | 1 | 15/7/2018      | n/a|


https://gist.github.com/lpirola/7310081

<hr>

### Tabelas descontos:
#### SS

Até 550€ - 11% funcionário – 11% Empresa <br>
De 551€ a 1099€ - 11% funcionário – 12% Empresa <br>
Mais de 1100€ - 11% funcionário – 13% Empresa

#### IRS

Até 550€ - 8% retenção  <br>
De 551€ a 999€ - 9% <br>
De 1000€ a 1499€ - 10% <br>
Mais de 1500€ - 12% <br>
