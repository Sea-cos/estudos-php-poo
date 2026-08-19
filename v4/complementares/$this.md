# $this

O `$this` é uma palavra-chave utilizada em linguagens como PHP para referenciar o próprio objeto dentro de uma classe. Ele é usado para acessar propriedades e métodos do objeto atual.

## Principais usos do `$this`:
- **Acessar atributos**: Permite acessar ou modificar os atributos da instância atual.
- **Chamar métodos**: Permite invocar outros métodos da mesma instância.
- **Diferenciar variáveis locais de atributos**: Quando um método possui um parâmetro ou variável local com o mesmo nome de um atributo, o `$this` é usado para referenciar o atributo da classe.

Exemplo em PHP:
```php
class Exemplo {
    private $atributo;

    public function setAtributo($valor) {
        $this->atributo = $valor; // Usando $this para acessar o atributo da classe
    }

    public function getAtributo() {
        return $this->atributo; // Usando $this para retornar o atributo
    }
}