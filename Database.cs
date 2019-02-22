using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Registers
{
    #region Applicant
    public class Applicant
    {
        #region Member Variables
        protected int _id;
        protected string _firstname;
        protected string _lastname;
        protected string _email;
        protected int _phone;
        protected string _university;
        protected string _department;
        protected string _year;
        protected string _aboutus;
        protected string _committee;
        protected string _qu;
        protected string _qu;
        protected string _qu;
        protected string _qu;
        #endregion
        #region Constructors
        public Applicant() { }
        public Applicant(string firstname, string lastname, string email, int phone, string university, string department, string year, string aboutus, string committee, string qu, string qu, string qu, string qu)
        {
            this._firstname=firstname;
            this._lastname=lastname;
            this._email=email;
            this._phone=phone;
            this._university=university;
            this._department=department;
            this._year=year;
            this._aboutus=aboutus;
            this._committee=committee;
            this._qu=qu;
            this._qu=qu;
            this._qu=qu;
            this._qu=qu;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Firstname
        {
            get {return _firstname;}
            set {_firstname=value;}
        }
        public virtual string Lastname
        {
            get {return _lastname;}
            set {_lastname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual int Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual string University
        {
            get {return _university;}
            set {_university=value;}
        }
        public virtual string Department
        {
            get {return _department;}
            set {_department=value;}
        }
        public virtual string Year
        {
            get {return _year;}
            set {_year=value;}
        }
        public virtual string Aboutus
        {
            get {return _aboutus;}
            set {_aboutus=value;}
        }
        public virtual string Committee
        {
            get {return _committee;}
            set {_committee=value;}
        }
        public virtual string Qu
        {
            get {return _qu;}
            set {_qu=value;}
        }
        public virtual string Qu
        {
            get {return _qu;}
            set {_qu=value;}
        }
        public virtual string Qu
        {
            get {return _qu;}
            set {_qu=value;}
        }
        public virtual string Qu
        {
            get {return _qu;}
            set {_qu=value;}
        }
        #endregion
    }
    #endregion
}