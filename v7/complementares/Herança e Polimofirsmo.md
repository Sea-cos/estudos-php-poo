# Herança e Polimorfismo

## Herança

### O que significa Herança em programação?
Herança é um conceito da Programação Orientada a Objetos (POO) que permite que uma classe (chamada de classe filha ou derivada) herde atributos e métodos de outra classe (chamada de classe pai ou base). Isso promove o reaproveitamento de código e a criação de hierarquias de classes.

### Qual a ideia central por trás do conceito?
A ideia central da herança é permitir que classes compartilhem comportamentos e características comuns, evitando a duplicação de código. A classe filha pode reutilizar ou até mesmo sobrescrever os métodos da classe pai, adaptando-os às suas necessidades específicas.

### Para que serve usar herança?
- Reutilizar código já existente, evitando duplicação.
- Criar hierarquias de classes que representem relações do mundo real.
- Facilitar a manutenção e a extensão do sistema.

### Quais vantagens ela traz?
- **Redução de redundância**: Código comum é centralizado na classe pai.
- **Facilidade de manutenção**: Alterações no comportamento comum podem ser feitas na classe pai, refletindo automaticamente nas classes filhas.
- **Extensibilidade**: Novas funcionalidades podem ser adicionadas às classes filhas sem modificar o código existente.

---

## Polimorfismo

### O que significa “polimorfismo”?
Polimorfismo significa "muitas formas". Na POO, refere-se à capacidade de um objeto assumir diferentes formas, ou seja, um mesmo método pode ter comportamentos diferentes dependendo do contexto ou do tipo do objeto que o invoca.

### Qual a ideia central do polimorfismo na POO?
A ideia central é permitir que métodos com o mesmo nome tenham implementações diferentes em classes distintas, promovendo flexibilidade e extensibilidade. Isso é alcançado por meio de sobrescrita de métodos em classes derivadas.

### Como o polimorfismo se relaciona com a herança?
O polimorfismo depende da herança (ou de interfaces) para funcionar. Ele permite que um objeto de uma classe filha seja tratado como se fosse da classe pai, mas ainda execute o comportamento específico da classe filha.

### Por que só faz sentido falar em polimorfismo quando há Herança (ou interface)?
Sem herança ou interfaces, não há uma relação hierárquica entre classes, o que impede que um objeto de uma classe seja tratado como um objeto de outra. O polimorfismo só é possível porque a herança estabelece essa relação, permitindo que métodos sejam sobrescritos e comportamentos sejam personalizados.