const Film = require('../models/Film');

module.exports = {
    index: (req, res) => {
        Film.find()
            .then(films => res.render('film/index', {'films': films}))
    },
    createGet: (req, res) => {
        res.render('film/create');
    },
    createPost: (req, res) => {
        let film = req.body;
        Film.create(film)
            .then(film => res.redirect('/'))
            .catch(err => res.render('film/create'))
    },
    editGet: (req, res) => {
        let id = req.params.id;
        Film.findById(id)
            .then(film => res.render('film/edit', film))
            .catch(err => res.redirect('/'))
    },
    editPost: (req, res) => {
        let id = req.params.id;
        let film = req.body;
        Film.findByIdAndUpdate(id, film, {runValidators: true})
            .then(film => res.redirect('/'))
            .catch(err => {
                film.id = id;
                res.render('film/edit', film);
            })
    },
    deleteGet: (req, res) => {
        let id = req.params.id;
        Film.findById(id)
            .then(film => res.render('film/delete', film))
            .catch(err => res.redirect('/'));
    },
    deletePost: (req, res) => {
        let id = req.params.id;
        Film.findByIdAndRemove(id).then(film => res.redirect('/'));
    }
};