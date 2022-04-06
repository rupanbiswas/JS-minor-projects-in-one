// const express = require ("express");
// const bodyParser = require ("body-parser");
// const ejs=require ("ejs");
// const Mongoose = require("mongoose");


import express from "express";
import bodyParser from "body-parser";
import ejs from "ejs";
import Mongoose from "mongoose";

const app =express();
app.set('view engine','ejs');
app.use(express.static('./public'));
app.use(bodyParser.urlencoded({extented:true}));

const url = "mongodb+srv://Rupan:Rupan@1234567890@cluster0.whfx5.mongodb.net/fb?retryWrites=true&w=majority"
Mongoose.connect(url,{useNewUrlParser:true,useUnifiedTopology:true})
.then(()=>console.log("oohh yeah database connected"))
.catch((error)=>console.log(error))

const contactschema=Mongoose.Schema({
   text:String,
   password:String
})
const contactmessage = Mongoose.model("contactmessage",contactschema);

app.get("/",(req, res)=>{
    res.render("home");
})
app.post("/",async function(req,res){
  const  contactpost ={
    text:req.body.text,
    password:req.body.password
}
const cpost=new contactmessage(contactpost);
await cpost.save();
});


let port = process.env.PORT;
    if (port == null || port == "") {
      port = 8080;
    }
    app.listen(port,function(req,res){
        console.log("server started on port 8000");
    });