using System.Linq;
using System.Web.Mvc;
using ShoppingList.Models;

namespace ShoppingList.Controllers
{
    [ValidateInput(false)]
    public class ProductController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var db = new ShoppingListDbContext())
            {
                var products = db.Products.ToList();
                return View(products);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View(new Product());
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Product product)
        {
            using (var db = new ShoppingListDbContext())
            {
                if (this.ModelState.IsValid)
                {
                    db.Products.Add(product);
                    db.SaveChanges();
                    return Redirect("/");
                }
                return View(product);
            }
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            using (var db = new ShoppingListDbContext())
            {
                var product = db.Products.Find(id);
                if (product == null)
                {
                    return Redirect("/");
                }
                return View(product);
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Product productModel)
        {
            using (var db = new ShoppingListDbContext())
            {
                var product = db.Products.Find(id);
                if (this.ModelState.IsValid)
                {
                    product.Name = productModel.Name;
                    product.Priority = productModel.Priority;
                    product.Quantity = productModel.Quantity;
                    product.Status = productModel.Status;

                    db.SaveChanges();

                    return Redirect("/");
                }
                return View("Edit", productModel);
            }
        }
    }
}