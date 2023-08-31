class Entity{
    constructor(type,x,y,s,speed,color){
        this.type = type
        this.x = x
        this.y = y
        this.s = s
        this.speed = speed
        this.color = color
        this.fire = false;
        this.colldown = false;
        this.isReload = false;
        this.mag = 0;
        this.magMax;
        this.rateOfFire
    }

    movement(event){
        switch(event){
            case 'N' : // up
                this.y -= this.speed
            break;
            case 'E' : // right
                this.x += this.speed
            break;
            case 'S' : // down
                this.y += this.speed
            break;
            case 'W' : // left
                this.x -= this.speed
            break;
            case 'NW' : // kiriatas
                this.y -= this.speed
                this.x -= this.speed
            break;
            case 'NE' : // kananatas
                this.y -= this.speed
                this.x += this.speed
            break;
            case 'SE' : // kananb
                this.y += this.speed
                this.x += this.speed
            break;
            case 'SW' : // kirib
                this.y += this.speed
                this.x -= this.speed
            break;

        }
    }

    draw(c){
        console.log("player draw");
        c.fillStyle = this.color
        c.fillRect(this.x,this.y,this.s,this.s)
    }


    reload() {
        this.isReload = true;
        if (this.isReload) {
          setTimeout(() => {
            this.mag = this.magMax;
            this.isReload = false;
          }, this.reloadDelay);
        }
      }
    
      fcolldown() {
        if (!this.colldown) {
          this.colldown = true;
          setTimeout(() => {
            this.colldown = false;
          }, this.rateOfFire);
        }
      }
}