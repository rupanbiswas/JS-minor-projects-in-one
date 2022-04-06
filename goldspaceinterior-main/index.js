const express = require ("express");
const bodyParser = require ("body-parser");
const ejs=require ("ejs");
const Mongoose = require("mongoose");
const nodemailer = require('nodemailer');
const Mail = require("nodemailer/lib/mailer");


const app =express();
app.set('view engine','ejs');
app.use(express.static('./public'));
app.use(bodyParser.urlencoded({extented:true}));

url = "mongodb+srv://Rupan:Rupan@01@cluster0.whfx5.mongodb.net/information?retryWrites=true&w=majority"
Mongoose.connect(url,{useNewUrlParser:true,useUnifiedTopology:true})
.then(()=>console.log("oohh yeah database connected"))
.catch((error)=>console.log(error))

const contactschema=Mongoose.Schema({
    fullname:String,
    phone:String,
    email:{
        type:String,
        required:true
    },
    message:String
})
const contactmessage = Mongoose.model("contactmessage",contactschema);

app.get("/",function(req,res){
    res.render("home");
});
app.get("/About",function(req,res){
    res.render("About");
});
app.get("/commercial",function(req,res){
    res.render("commercial");
});

app.get("/gallery",function(req,res){
    res.render("gallery");
});
app.get("/Homedecor",function(req,res){
    res.render("Homedecor");
});
app.get("/Office",function(req,res){
    res.render("Office");
});
app.get("/Ourworks",function(req,res){
    res.render("Ourworks");
});
app.get("/Residentialdesigning",function(req,res){
    res.render("Residentialdesigning");
});
app.get("/services",function(req,res){
    res.render("services");
});
app.get("/homerenovation",function(req,res){
    res.render("Homerenovation");
});

app.get("/Contactus",function(req,res){
    res.render("Contactus");
});

app.post("/contactus",async function(req,res){
    contactpost ={
    fullname:req.body.name,
    phone:req.body.phone,
    email:req.body.email,   
    message:req.body.message
}
const cpost=new contactmessage(contactpost);
await cpost.save();

mail(contactpost.email)
res.redirect("/");
});
function mail(adres){
    let transporter = nodemailer.createTransport({
        service:'gmail',
        auth:{
            user:'rupanbiswas08@gmail.com',
            pass:'Rupan@01'
        }
    });
    
    let mailoptions ={
        from:'rupanbiswas08@gmail.com',
        to:`${adres}`,
        subject:'testing',
        text:'Thank you for contacting. We will get back to you'
    };
    
    transporter.sendMail(mailoptions, function (err, info) {
        if(err){
            console.log(err)
        }else{
            console.log("it worked")
        }
     });
    
    }

let port = process.env.PORT;
    if (port == null || port == "") {
      port = 8000;
    }
    app.listen(port,function(req,res){
        console.log("server started on port 8000");
    });