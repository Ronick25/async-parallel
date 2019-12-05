const express = require('express');
const app = express();

app.get('/', (req, res) => {
    setTimeout(() => {
        res.send('Some response...')
    }, 1000);
});

app.listen(3000, () => console.log('App listening on port 3000!'));