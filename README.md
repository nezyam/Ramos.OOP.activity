PHP OOP activity
Object-oriented Programming Activity
Create a separate PHP file for each problem. Upload your source codes in a public
Github repository. Submit your own github link in the GCLAMP portal and make sure
that your github repository is in public.
1. Write a PHP program to create a Vehicle class with name, speed and mileage
instance attributes.
2. Create a Vehicle class without any variables and methods
3. Create a child class Bus that will inherit all of the variables and methods of the
Vehicle class in Problem #1.
4. Create a Bus class that inherits from the Vehicle class in Problem #1. Give the
capacity argument of Bus->seating_capacity() a default value of 50.
5. Using the Vehicle, Bus, and Car classes, define a property that must have the
same value for every class instance (object).
6. Create a Bus child class that inherits from the Vehicle class. The default fare
charge of any vehicle is seating capacity * 100. If Vehicle is Bus instance, we
need to add an extra 10% on full fare as a maintenance charge. So total fare for
bus instance will become the final amount = total fare + 10% of the total fare.
Note: The bus seating capacity is 50. so, the final fare amount should be 5500.
You need to override the fare() method of a Vehicle class in Bus class.
See method override/polymorphism section on w3schools PHP OOP tutorials. 
