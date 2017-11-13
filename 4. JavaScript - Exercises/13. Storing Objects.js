function solution(arr) {
    let people = [];
    for (let input of arr) {
        let inputs = input.split(" -> ");
        let person = {};
        person.Name = inputs[0];
        person.Age = inputs[1];
        person.Grade = inputs[2];
        people.push(person);
    }
    for (let person of people) {
        for (let prop in person) {
            if (person.hasOwnProperty(prop)) {
                console.log(`${prop}: ${person[prop]}`)
            }
        }
    }
}