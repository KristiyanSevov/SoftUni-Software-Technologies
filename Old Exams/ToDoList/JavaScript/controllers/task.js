const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        Task.find().then(tasks => {
            return res.render('task/index', {'tasks': tasks})
        })
    },
	createGet: (req, res) => {
        res.render('task/create');
	},
	createPost: (req, res) => {
        let task = req.body;
        Task.create(task).then(task => {res.redirect("/")})
            .catch(err => res.render('task/create'))
	},
	deleteGet: (req, res) => {
        let id = req.params.id;
        Task.findById(id).then(task => {
        	if (task) {
        		return res.render('task/delete', task);
            } else {
        		return res.redirect('/');
			}
        })
	},
	deletePost: (req, res) => {
        let id = req.params.id;
        Task.findByIdAndRemove(id).then(task => {res.redirect('/')});
	}
};