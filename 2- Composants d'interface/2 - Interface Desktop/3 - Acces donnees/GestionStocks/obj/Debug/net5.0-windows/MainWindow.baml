   M S B A M L   `   `   `  ����H  DGestionStocks, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null-clr-namespace:GestionStocksGestionStocks  5   	       GestionStocks.MainWindow   5   	   W SPresentationCore, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   -localclr-namespace:GestionStocks     5   	     � Title$  Gestion des articles��5   	   $	��450��6&   $	��800��63   .��5	      �  � RowDefinitions 5
   
   �� 5      $	��15* �6   �� 5      $	��59* �6   �� 5      $	��20* �6   �� 5      $
��320* �6   �� 5      $	��20* �6    � ColumnDefinitions 5   
   �� 5      $��1* �6   �� 5      $��2* �6   �� 5      $
��0.5* �6   �� 5      $��2* �6   �� 5      $
��0.5* �6   �� 5      $��2* �6   �� 5      $��1* �6   .+�5   
   �� -   5         ��Name$ btn_ajouterArticle��5      $��Ajouter��6-   $��1��6?   $��	0,15,44,0q�6O   $��2��6b   $��2��6s   6�   �� 5   
   -   5        $ btn_modifierArticle��5      $��Modifier��6.   $��2��6A   $��
44,15,44,0q�6Q   $��2��6e   $��3��6v   6�   �� 5   
   -   5        $ btn_supprimerArticle��5      $��	Supprimer��6/   $��4��6C   $��	44,15,0,0q�6S   $��2��6f   $��2��6w   6�   &   System.Windows.Controls.DataGrid  5   
   -   5          Name$ ListeArticles��5      $��1��6*   $��3��6:   $��5��6G      AutoGenerateColumns$ False��6[      CanUserAddRows$ False��6w      Columns 5      0  *System.Windows.Controls.DataGridTextColumn  5      ,  &System.Windows.Controls.DataGridColumn   Header$ Id de l'article��6%   	   
Visibility$	 Hidden=�6\   1  +System.Windows.Controls.DataGridBoundColumn
   Binding
 6>   �� *	IdArticle+6r     5       $ Libelle de l'article��6%      Width5  /System.Windows.Controls.DataGridLengthConverter$ 2* 6f   
 6C   �� *LibelleArticle+6s     5!      $ 
Quantitée��6%   $ 1* 6]   
 68   �� *QuantiteStockee+6j     5"      $ Id de la catégorie��6%   $	 Hidden=�6a   
 6A   �� *IdCategorie+6w     5#      $ 	Categorie��6%   $ 2* 6^   
 68   �� *LibelleCategorie+6k   5%      5&      5'      