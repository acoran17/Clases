class Player {
    name;
    #gender;
    birthday;
    age;
    
    constructor(name, gender = 'female', birthday) {
        this.name = name;
        this.gender = gender;
        if(birthday){
            let [d,m,y]=birthday.split('/');
            if(!isNaN(new Date(y,m-1,d))){
                this.birthday = birthday;
            }
        }

    }

    get gender() {
        return this.#gender;
    }

    get age() {
        if(!this.birthday) return undefined;
        let now = new Date();
        let [d,m,y]=birthday.split('/');
        let date = new Date(y,m-1,d);
        let diff = now.getFullYear() - date.getFullYear();
        if(now.getMonth() < date.getMonth()) { diff--; 
        }else if(now.getMonth() == date.getMonth() && now.getDay() < date.getDay()) {
            diff--;
        }
        return diff;
    }

    get category() {
        if (this.age < 12) {
            return "Benjamin"
        } else if (this.age <= 15) {
            return "Cadet";
        } else if (this.age <= 19) {
            return "Junior";
        }else if (this.age > 19) {
            return "Senior";
        }else{
            return undefined;
        }
    }
}

module.exports = Player;