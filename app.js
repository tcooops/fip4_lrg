const express = require('express');

const path = require('path');

const app = express();

app.use(express.static("public"));

const port = process.env.PORT || 5000;

app.get("/", (req, res) => {
    res.sendFile(path.join(__dirname, "index.html"));
});

app.get("/partners", (req, res) => {
    res.sendFile(path.join(__dirname, "partners.html"));
});

app.get("/membership", (req, res) => {
    res.sendFile(path.join(__dirname, "membership.html"));
});

app.get("/join", (req, res) => {
    res.sendFile(path.join(__dirname, "join.html"));
});

app.get("/contact", (req, res) => {
    res.sendFile(path.join(__dirname, "contact.html"));
});

const server = app.listen(port, () => {
    console.log(`app is running on ${port}`);
});
