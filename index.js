const matematicas = require("./matematicas.js");
const os = require("os");
const fs = require("fs");

fs.writeFile("./algo.txt", "linea 0", function (err) {
    if (err) {
        console.log(err);
    }
    console.log("archivo creado");
});

fs.readFile("./algo.txt", function (err, data) {
    if (err) {
        console.log("err");
    } else {
        console.log(data.toString());
    }
})


console.log(matematicas.add0(2, 2));
console.log(matematicas.add1(2, 2));
console.log(matematicas.add2(2, 2));
console.log(matematicas.add3(2, 2));


console.log(os.cpus());/*sirve para saber las especificaiones de procesador y cuantos nucleos existen*/
console.log(os.networkInterfaces());/* */
console.log(os.arch());/* */
console.log(os.endianness());/**/
console.log(os.freemem()); /*sirve para saber cuanta memoria tengo libre en la pc en bytes*/
console.log(os.getPriority());/* */
console.log(os.homedir());/* */
console.log(os.hostname());/* */
console.log(os.loadavg());/* */
console.log(os.platform());/* */
