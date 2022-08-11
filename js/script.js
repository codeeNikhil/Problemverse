const day=document.getElementById('day');
const hour=document.getElementById('hour');
const minute=document.getElementById('minute');
const change=document.getElementById('P-change');
const post=document.getElementById('posting'); // request page after button display 

const d = new Date();

var blink = document.getElementById('blink');
setInterval(function () {
blink.style.opacity = 
(blink.style.opacity == 0 ? 1 : 0);
}, 1000);

let hourset=d.getHours();
let minset=d.getMinutes();
if(hourset<10){
        
    hour.innerText=`${"0"}${hourset}`;
}else{
    hour.innerText=hourset; 

}

if(minset<10){
    
    minute.innerText=`${"0"}${minset}`;
}else{
    minute.innerText=minset;

}
const dayy = ["Sun","Mon","Tue","Wed","Thr","Fri","Sat","Sun"];
console.log(d.getDay()-1);
let dayname= dayy[d.getDay()];



day.innerText=dayname;


console.log();




display=()=>{
    
    post.innerHTML=`<h2> We got your query and we will respond in 30 minutes</h2>
    <button class="submit"><a href=${"request.php"}>Submit another query</a></button>`   
    post.style.justifyContent="center"
    post.style.margin="auto"
}
