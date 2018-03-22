## Boas Práticas e Padrões de Projeto(PHP)

### Vantagens:

* Código padronizado;
* Facilita a manutenção de código;
* Menos Bugs;
* Mais fácil de testar;

### Boas Práticas:

* DRY(Don't repeat yourself);
* Don't comment bad code, rewrite it;
* Utilizar uma ferramenta de gerenciamento de dependências;

* S.O.L.I.D.;

  * [Single Reponsability](examples/singleResponsability.php);
  * [Open Closed Principle](examples/openClosedPrinciple.php);
  * [Liskov Substitution Principle](examples/liskovSubstitutionPrinciple.php);
  * [Interface Segregation Principle](examples/interfaceSegregationPrinciple.php);
  * [Dependency Inversion Principle](examples/dependencyInversionPrinciple.php);

> [Fonte dos exemplos](https://imasters.com.br/desenvolvimento/solid-com-php/?trace=1519021197&source=single)

### [PSRs](https://github.com/php-fig/fig-standards)

* [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md): Autload *Substituida pela PSR-4 a partir do PHP 5.3;
* [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md): Regras básicas de desenvolvimento (Tags, classes, Propriedades e métodos);
* [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md): Extensão do PSR-1(Indentação, tamanho de linhas, palavras chaves);
* [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md): Interface para logs
* [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md): Autload *Deve ser utilizada a partir do PHP 5.3;

### Ferramentas Úteis:

* **Qualidade de código**:

  * [PHP CodeSniffer](https://pear.php.net/package/PHP_CodeSniffer/);
  * [Codeclimate](https://github.com/codeclimate/codeclimate);

* **Editores de texto (PHP check)**:


#### Gerenciamento de Dependências:

* Composer;
* PEAR;


#### Links:

* [phptherightway](http://br.phptherightway.com/);

#### Livros:

* [Clean Code](https://www.amazon.com.br/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350882)
