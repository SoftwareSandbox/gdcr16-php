# gdcr16-csharp
Global Code retreat 2016 PHP


Kickstarted with PHP, PHPUnit and Composer. 


* Write exactly one new test. It should be the smallest test which seems to point in the direction of a solution
* Run the test to make sure it fails
* Make the test from (1) pass by writing the least amount of implementation code you can IN THE TEST METHOD.
* Refactor to remove duplication or otherwise as required to improve the design. Be strict about the refactorings. Only introduce new abstractions (methods, classes, etc) when they will help to improve the design of the code.

Specifically:

* ONLY Extract a new method if there is sufficient code duplication in the test methods. When extracting a method, initially extract it to the test class (don't create a new class yet).
* ONLY create a new class when a clear grouping of methods emerges and when the test class starts to feel crowded or too large.

Repeat the process by writing another test (go back to step #1).
