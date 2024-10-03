class Match {
    dateMatch;
    players = [];
    winner = null;

    constructor(dateMatch = new Date()) {
        if(date instanceof Date) {
            this.dateMatch = dateMatch;
        }else {
            const[day,month,year] = date.split('/');
            this.date = new Date([year,month,day].join('/'));
        }
    }

    insertPlayer(player) {
        if (this.players.length<2) {
            this.players.push(player);
            return true;
        }
    }

    setWinner(player) {
        if(this.players.contain(player)) {
            if(this.date < (new Date())) {
                this.winner = player;
                return true;
            }
        }
        return false;
    }

    getWinner() {
        return this.winner;
    }
}