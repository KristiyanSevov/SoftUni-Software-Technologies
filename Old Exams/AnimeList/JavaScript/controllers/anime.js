const Anime = require('../models/Anime');

module.exports = {
	index: (req, res) => {
        Anime.find().then(animes => {
        	return res.render('anime/index', {'animes': animes});
		})
	},
	createGet: (req, res) => {
        res.render('anime/create');
	},
	createPost: (req, res) => {
        let anime = req.body;
        Anime.create(anime).then(anime => {
        	res.redirect("/");
		}).catch(err => res.render('anime/create', anime))
	},
	deleteGet: (req, res) => {
        let id = req.params.id;
        Anime.findById(id).then(anime => {
        	if (anime) {
        		res.render('anime/delete', anime);
			} else {
        		res.redirect('/');
			}
		})
	},
	deletePost: (req, res) => {
        let id = req.params.id;
        Anime.findByIdAndRemove(id).then(anime => res.redirect('/'));
	}
};