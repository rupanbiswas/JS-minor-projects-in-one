const express = require("express");
const bodyparser = require("body-parser");
const date = require(__dirname+"/date.js");

const app = express();
var input1 ="";
var input1s = ["eat food","cook food","go for work"];
var workitems =[];
app.set('view engine','ejs');
app.use(bodyparser.urlencoded({extended:true}));
app.use(express.static("public"))
app.get("/",function(req,res){
    var day = date.getdate();
    var particulardate = date.getday();
// var currentday = today.getDay();
// var dayi = " ";

// switch(currentday)
// {
//     case 0:
//     dayi = "sunday";
//     break;
//     case 1:
//     dayi = "monday";
//     break;
//     case 2:
//     dayi = "tuesday";
//     break;
//     case 3:
//     dayi = "wednesday";
//     break;
//     case 4:
//     dayi = "thursday";
//     break;
//     case 5:
//     dayi = "friday";
//     break;
//     case 6:
//     dayi = "saturday";
//     break;
//     default:
//         console.log("error wrong input")
// }
// if (currentday === 6 || currentday === 0){
    // dayi = "weekend";
// }
// else
// {
    // dayi = "weekday";
// }
res.render("list", {listtittle: day , newlistitens : input1s});
});

app.post("/",function(req,res){
    input1 =req.body.input1;
     console.log(req.body);
    if(req.body.list === "work")
    {
        workitems.push(input1);
 res.redirect("/work")
    }
    else{
        input1s.push(input1);
        // console.log(input1);
        res.redirect("/");
    }
   
})
app.get("/work",function(req,res){
    res.render("list",{listtittle :"work list",newlistitens: workitems});
})
// app.post("/work",function(req,res){
//  let item = req.body.input1;
//  workitems.push(item);
//  res.redirect("/work")
// })
app.get("/about",function(req,res){
    res.render("about");
})
app.listen(5000,function(){
    console.log("the server has been started on the port 5000");
});