using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Dissertation_FYP.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "A non-profit project to help aid in the learning of Computing and Code Learning";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "This is the space to get in contact to ask questions and or to find out more information about any of the topics included in this application";

            return View();
        }

        public ActionResult Tests()
        {
            ViewBag.Message = "This is Test Centre! You can check your progress on different topics and also test yourself on the areas you have learnt about";

            return View();
        }

        public ActionResult Topics()
        {
            ViewBag.Message = "Here you can choose which language you would like to study! Each topic gets progressivly more difficult so don't be afraid to push yourself!";

            return View();
        }

        public ActionResult Login()
        {
            ViewBag.Message = "Welcome to our Login Page! ";

            return View();
        }

        public ActionResult Register()
        {
            ViewBag.Message = "Welcome to our Register Page!";

            return View();
        }
        public ActionResult ForgottenPSWPage()
        {
            ViewBag.Message = "Welcome to our Recover Password Page!";
            return View();
        }
    }
}