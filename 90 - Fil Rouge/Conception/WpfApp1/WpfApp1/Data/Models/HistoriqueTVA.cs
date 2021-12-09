﻿using System;
using System.Collections.Generic;

#nullable disable

namespace WpfApp1.Data.Models
{
    public partial class HistoriqueTVA
    {
        public int IdHistoriqueTva { get; set; }
        public int? IdProduit { get; set; }
        public int? IdTva { get; set; }
        public DateTime DateTva { get; set; }

        public virtual Produit Produit { get; set; }
        public virtual TVA Tva { get; set; }
    }
}
