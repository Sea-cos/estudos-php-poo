# Interface em POO

## O que é uma interface em POO?
Uma interface é um contrato que define um conjunto de métodos que uma classe deve implementar. Ela não contém implementação dos métodos, apenas suas assinaturas. Interfaces são amplamente utilizadas para garantir que diferentes classes sigam um padrão comum, promovendo a interoperabilidade.

## Diferença entre Classe Abstrata e Interface
- **Classe Abstrata**:
  - Pode conter métodos com implementação e métodos abstratos (sem implementação).
  - Permite a definição de atributos.
  - Uma classe pode herdar apenas uma classe abstrata (herança simples).

- **Interface**:
  - Não possui implementação de métodos, apenas suas assinaturas.
  - Não pode conter atributos (apenas constantes, dependendo da linguagem).
  - Uma classe pode implementar várias interfaces (herança múltipla).

## Por que usar interfaces pode melhorar a manutenção e a extensibilidade do código?
- **Flexibilidade**: Permite que diferentes classes implementem a mesma interface, facilitando a substituição ou adição de novas funcionalidades sem alterar o código existente.
- **Desacoplamento**: Reduz a dependência entre as partes do sistema, tornando o código mais modular.
- **Extensibilidade**: Facilita a adição de novas funcionalidades, já que novas classes podem implementar a interface sem impactar as classes existentes.
- **Testabilidade**: Interfaces tornam mais fácil criar mocks ou stubs para testes unitários.

O uso de interfaces promove boas práticas de design, como o Princípio da Substituição de Liskov e o Princípio da Segregação de Interfaces, ambos fundamentais para um código limpo e sustentável.