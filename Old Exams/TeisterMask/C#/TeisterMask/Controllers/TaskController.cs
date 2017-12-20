using System;
using System.Linq;
using System.Web.Mvc;
using TeisterMask.Models;

namespace TeisterMask.Controllers
{
    [ValidateInput(false)]
	public class TaskController : Controller
	{
	    [HttpGet]
        [Route("")]
	    public ActionResult Index()
	    {
            using (var db = new TeisterMaskDbContext())
            {
                var tasks = db.Tasks.ToList();
                return View(tasks);
            }
		}

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
		{
            return View(new Task());
		}

		[HttpPost]
		[Route("create")]
        [ValidateAntiForgeryToken]
		public ActionResult Create(Task task)
		{
            using (var db = new TeisterMaskDbContext())
            {
                if (this.ModelState.IsValid)
                {
                    db.Tasks.Add(task);
                    db.SaveChanges();
                    return Redirect("/");
                }
                return View(task);
            }
        }

		[HttpGet]
		[Route("edit/{id}")]
        public ActionResult Edit(int id)
		{
            using (var db = new TeisterMaskDbContext())
            {
                var task = db.Tasks.Find(id);
                if (task == null)
                {
                    return Redirect("/");
                }
                else
                {
                    return View(task);
                }
            }
        }

		[HttpPost]
		[Route("edit/{id}")]
        [ValidateAntiForgeryToken]
		public ActionResult EditConfirm(int id, Task taskModel)
		{
            using (var db = new TeisterMaskDbContext())
            {
                var task = db.Tasks.Find(id);
                if (this.ModelState.IsValid)
                {
                    task.Title = taskModel.Title;
                    task.Status = taskModel.Status;
                    db.SaveChanges();
                    return Redirect("/");
                }
                return View("Edit", taskModel);
            }
        }
	}
}