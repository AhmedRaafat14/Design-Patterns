# Chain of Responsibility

is behavioral design pattern that allows passing a request along the chain of potential handlers until one of them handles the request.

### Problem:

Imagine that you are working on some validation system that needs to validate some kind of information lets say mobile numbers for example, you are required to validate the numbers with different 3rd party API based on the phone number country.
<br />
So, you have a client that gets a phone number and you need to know which handler should handle this phone number to use?!
<br />
Give it sometime to think about the possible solutions to solve this problem.

### Solution:
So, the best solution for this is to have something called a chain so you give the chain the phone number and the first handler in the chain check can I inspect this phone number YES so apply the logic and if NO pass the phone number to the next handler in the chain...etc.
<br />
That is in very basic words the COR pattern how it works.

### Applicability:

* When your application expected to process different requests in different ways.
* When it is required to execute several handlers in specific order.

### Pros & Cons
#### Pros:
    * Control the order of the request handling.
    * Single Responsibility Priciple.
    * Open/Closed Principle.
#### Cons:
    * Some requests may end up unhandled.


### Dive into:
* [Real World Example](https://www.php-fig.org/psr/psr-15/)
* [Chain of responsibility pattern](https://en.wikipedia.org/wiki/Chain-of-responsibility_pattern)
* https://sourcemaking.com/design_patterns/chain_of_responsibility
* https://refactoring.guru/design-patterns/chain-of-responsibility