/**
 * Created by Alexei on 22/08/14.
 */
//Example from DMC lecture

//an object literal:
Student = {
    name: "Joe",
    age: 23,
    marks: [
        {
            course: "COSC2271",
            mark: 85
        }, {
            course: "COSC1300",
            mark: 79
        }
    ],
    GPA: function() {},

    alert:("age: " + Student.age),
    alert:("DMC: " + Student.marks[0].mark),
    alert:("GPA: " + Student.GPA())
};
//a more generic way to introduce an object: constructor.
function student(name, age)
{
    this.name = name;
    this.age = age;
    this.greet = function()
    {
        ("I'm " + this.name);
    }
}
t = new Student("Jan", 25);

joe = new Student("Joe", 23);
(joe.greet());

//in order to support inheritance, we need to be able to add methods after the object has already been created.
//this is achieved with prototypes.
Student.prototype.GPA = function() {};
