<?php

class Client
{
public  $_code_client;
public $_societe;
public $_Contact;
public  $_adresse;
public  $_fonction;
public  $_ville;
public  $_region;
public  $_pays;
public  $_code_postal;
public  $_tel;
public  $_fax;
    /*public function code_client()
    {
      return this->_codeclient;

    }
    public function societe()
    {
      return this->_societe;

    }
    public function contact()
    {
      return this->_Contact;

    }
    public function adresse()
    {
      return this->_adresse;

    }
    public function fonction()
    {
      return this->_fonction;

    }
    public function ville()
    {
      return this->_ville;

    }
    public function region()
    {
      return this->_region;

    }
    public function pays()
    {
      return this->_pays;

    }
    public function code_postal()
    {
      return this->_code_postal;

    }
    public function tel()
    {
      return this->_tel;

    }
    public function fax()
    {
      return this->_fax;

    }
    public function setCodeclient($code_client)
 {
   if (is_string($code_client))
   {
     $this->_code_client = $code_client;
   }
 }
 public function setSociete($societe)
{
if (is_string($societe))
{
  $this->_societe = $societe;
}
}
public function setContact($contact)
{
if (is_string($contact))
{
 $this->_Contact = $contact;
}
}
public function setAdresse($adresse)
{
if (is_string($adresse))
{
 $this->_adresse = $adresse;
}
}
public function setFonction($fonction)
{
if (is_string($fonction))
{
 $this->_fonction = $fonction;
}
}
public function setVille($ville)
{
if (is_string($ville))
{
 $this->_ville = $ville;
}
}
public function setRegion($region)
{
if (is_string($region))
{
 $this->_region = $region;
}
}
public function setPays($pays)
{
if (is_string($pays))
{
 $this->_pays = $pays;
}
}
public function setCode_postal($code_postal)
{
if (is_string($code_postal))
{
 $this->_code_postal = $code_postal;
}
}
public function setTel($tel)
{
if (is_string($tel))
{
 $this->_tel = $tel;
}
}
public function setFax($fax)
{
if (is_string($fax))
{
 $this->_fax = $fax;
}
}*/
public function setdata($sql)
{
 mysql_query($sql);
}
public function getdata($sql)
{
 return mysql_query($sql);
}
public function delete($sql)
{
 mysql_query($sql);
}
}
