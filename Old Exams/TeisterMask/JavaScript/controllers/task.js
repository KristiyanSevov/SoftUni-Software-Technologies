const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        let tasks = Task.find().then(tasks => {
            let openTasks = [];
            let inProgressTasks = [];
            let finishedTasks = [];
            for (let task of tasks) {
                if (task.status === "Open") {
                    openTasks.push(task);
                } else if (task.status === "In Progress") {
                    inProgressTasks.push(task);
                } else if (task.status === "Finished") {
                    finishedTasks.push(task);
                }
            }
            return res.render('task/index', {
                "openTasks": openTasks,
                "inProgressTasks": inProgressTasks,
                "finishedTasks": finishedTasks
            });
        });
    },
    createGet: (req, res) => {
        res.render('task/create')
    },
    createPost: (req, res) => {
        let task = req.body;
        Task.create(task).then(task => {
            res.redirect("/")
        }).catch(err => res.redirect("/"))
    },
    editGet: (req, res) => {
        let taskId = req.params.id;
        Task.findById(taskId).then(task => {
            if (task) {
                res.render('task/edit', task);
            } else {
                res.redirect('/');
            }
        })
    },
    editPost: (req, res) => {
        let taskId = req.params.id;
        let task = req.body;
        Task.findByIdAndUpdate(taskId, task, {runValidators: true})
            .then(task => res.redirect('/'))
            .catch(err => {
                task.id = taskId;
                res.render('task/edit', task);
            });
    }
};