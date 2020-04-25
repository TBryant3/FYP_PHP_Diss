using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Dissertation_FYP.Models
{
    public class UserClassModel
    {
        public int UserID { get; set; }
        public string Username { get; set; }
        public string Email { get; set; }
        public string Password { get; set; }
        public Nullable<int> Topic1Progress { get; set; }
        public Nullable<int> Topic2Progress { get; set; }
        public Nullable<int> Topic3Progress { get; set; }
        public Nullable<int> Topic4Progress { get; set; }
    }
}