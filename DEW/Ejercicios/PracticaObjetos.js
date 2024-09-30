const car = {
    registration: "000,000",
    make: "onda",
    model: "modelo",
    year: 1999,
    getMakeModel: function () {
        return "La marca del coche es: " + this.make + ", y el modelo es: " + this.model;
    },
    thisYearHasITV: function () {
        let yearNow = (new Date()).getFullYear - this.year;
        if(yearNow - this.year < 4) return false;
        if(yearNow - this.year > 10) return true;
        return (yearNow - this.year) % 2 == 0;
    },
    toString: function () {
        return `(${this.registration} - ${this.make} - ${this.model} - ${this.year})`;

    }
};

console.log(car.getMakeModel());

let car2 = {...car};
car2.make = "Ferrari";
car2.model = "Laferrari";
console.log('car: ', car.toString());
console.log('car2: ', car2.toString());

let car3 = {...car,
    make: 'Seat',
    model: 'Panda'
}

console.log(car3.toString());

let garage = [car,car2,car3];
car2.registration = "23131CDE";
car2.year = 2014;
car3.registration = "4914HGJ";
car3.year = 2021;
console.log(car3.toString());

console.log(garage);
console.log('Coches Onda: ', garage.filter(c=>c.make == "onda").map(c=>c.toString()));
console.log('Coches posterior a 2010', garage.filter(c => c.year > 2010).map(c => c.toString()));
console.log('ITV: ', garage.some(c => c.thisYearHasITV()));
garage.sort((c1, c2) => c1.year - c2.year);
console.log(garage.map(c=> c.toString()));
garage.sort((c1, c2) => c1.getMakeModel().toLowerCase().localeCompare(c2.getMakeModel().toLowerCase()));
console.log(garage.map(c=> c.toString()));
console.log("marcas: ", garage.map(car.make));
