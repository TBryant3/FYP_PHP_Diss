using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Dissertation_FYP.Models;

namespace Dissertation_FYP.Controllers
{
    public class AccountController : Controller
    {
        public ActionResult Index()
        {
            AccountsDBEntitiesTEST db = new AccountsDBEntitiesTEST();
            User user = db.Users.SingleOrDefault(x => x.UserID == 1);

            UserClassModel userViewModel = new UserClassModel();

            userViewModel.UserID = user.UserID;
            userViewModel.Username = user.Username;
            userViewModel.Email = user.Email;
            userViewModel.Password = user.Password;
            userViewModel.Topic1Progress = user.Topic1Progress;
            userViewModel.Topic2Progress = user.Topic2Progress;
            userViewModel.Topic3Progress = user.Topic3Progress;
            userViewModel.Topic4Progress = user.Topic4Progress;


            return View();
        }

        public ActionResult Login()
        {
            return View();
        }
        
    }
}
