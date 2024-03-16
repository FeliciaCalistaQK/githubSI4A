console.log("Ini adalah script external");
//Ini Single comment
/**
 * Ini Multilene Comment
 * Silahkan dicoba
 */

let firstname="Felicia";//String
let lastname=" Calista";//String
var age = 19;//number(int)
typeof age;
const pi = 3.14//number(float/double)
console.log(typeof pi);
//pi = 0;

//operator
//operasi string
let fullname= firstname+lastname;
console.log(fullname);

//operasi matematika
let a = 12;
let b = 9;
console.log(a+b);
console.log(a-b);
console.log(a*b);
console.log(a/b);
console.log(a%b);

//operasi logika
let aString ="10";
let aNumber = 10;
console.log(aString == aNumber);
console.log(aString === aNumber);
console.log("Logika and dan Or");
console.log(a < 15 && b > 8);
console.log(a > 15 && b < 8);

console.log(a < 15 || b > 8);
console.log(a > 15 || b < 8);

let text="";
for(let i = 0;i<5;i++){
    text +="The Number is "+i+"\n";
}
console.log(text)