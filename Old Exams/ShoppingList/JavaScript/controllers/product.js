const Product = require('../models/Product');

module.exports = {
	index: (req, res) => {
        Product.find().then(products => {
        	return res.render('product/index', {'entries': products});
        })
	},
	createGet: (req, res) => {
        res.render('product/create');
	},
	createPost: (req, res) => {
		let product = req.body;
		Product.create(product).then(product => res.redirect("/"))
			.catch(err => res.render('product/create'));
	},
	editGet: (req, res) => {
        let id = req.params.id;
        Product.findById(id).then(product => {
        	if (product) {
        		res.render('product/edit', product);
			} else {
        		res.redirect('/');
			}
		})
	},
	editPost: (req, res) => {
        let id = req.params.id;
        let product = req.body;
        Product.findByIdAndUpdate(id, product, {runValidators: true})
			.then(product => res.redirect("/"))
			.catch(err => {
				product.id = id;
				return res.render("product/edit", product);
			});
	}
};