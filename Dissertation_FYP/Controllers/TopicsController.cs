using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Dissertation_FYP.Controllers
{
    public class TopicsController : Controller
    {
        public ActionResult HTMLPage()
        {
            return View();
        }

        public ActionResult JavaScriptPage()
        {
            return View();
        }

        public ActionResult CSharpPage()
        {
            return View();
        }

        public ActionResult CplusplusPage()
        {
            return View();
        }















        // GET: Topics
        public ActionResult Index()
        {
            return View();
        }

        // GET: Topics/Details/5
        public ActionResult Details(int id)
        {
            return View();
        }

        // GET: Topics/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Topics/Create
        [HttpPost]
        public ActionResult Create(FormCollection collection)
        {
            try
            {
                // TODO: Add insert logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: Topics/Edit/5
        public ActionResult Edit(int id)
        {
            return View();
        }

        // POST: Topics/Edit/5
        [HttpPost]
        public ActionResult Edit(int id, FormCollection collection)
        {
            try
            {
                // TODO: Add update logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: Topics/Delete/5
        public ActionResult Delete(int id)
        {
            return View();
        }

        // POST: Topics/Delete/5
        [HttpPost]
        public ActionResult Delete(int id, FormCollection collection)
        {
            try
            {
                // TODO: Add delete logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }
    }
}
