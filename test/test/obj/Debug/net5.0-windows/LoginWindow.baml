   M S B A M L   `   `   `  ����  test    test.LoginWindow   5   	   W SPresentationCore, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35^ ZWindowsFormsIntegration, Version=5.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35H 9http://schemas.microsoft.com/winfx/2006/xaml/presentation      5   	   R NSystem.Xaml, Version=5.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	     � Title$  LoginWindow��5   	   $	��300��6   $	��600��6*    � 	Resources 5          booleanToVisibilityConverter��%   &	        �� 5   
   6'   5      .��5      �  � ColumnDefinitions 5	   
   �� 5
      $
��Auto �6   �� 5      $��* �6    � RowDefinitions 5   
   �� 5      $
��Auto �6   �� 5      $
��Auto �6   �� 5      $
��Auto �6   �� 5      $
��Auto �6   �� 5      $
��Auto �6   �� 5      $��* �6   .+�5   
   �� $��0��67   $��0��6D   $��2��6T   $��14(�5      $��Right=�6   $
��Wrap=�6:   $
��Bold"�6N   $��2,2,2,2q�5      ��5      �� *AuthenticatedUser+5      �� 5   
   $��	Username:��6   $��1��6%   $��0��62   �� 5   
   $��	Password:��6   $��2��6%   $��0��62   �� 5   
   $��1��6,   $��1��69   ��6   �� *
Username+69   G� 5   
   -   5         G�Name$ passwordBox��5      $��2��6+   $��1��68   �� 5   
    �� Orientation$ 
Horizontal=�6   $��3��6.   $��1��6;   .+�5      �� $��Log in��6   $��Center=�5      ��5   &   �� *LoginCommand+ �� Mode$ OneTime=���5      ��  �� ElementName$ passwordBox��5      �� 5       $��Log out��6   $��Center=�5"      $��2,0,0,0q�6*   ��5    '   �� *LogoutCommand+$ OneTime=�y�5!      �� *IsAuthenticated+ �� 	Converter# [  5"   *   5#      �� 5$   
   $��4��6,   $��1��69   $��Center=�5%      $��Center=�6-   
���  ��$
��Wrap=�6Y   ��5$      �� *Status+5%   Y   �� 5&   
   $��5��6   $��1��6"   $��Center=�62   .+�5'      �� $��Show secret view��6   $��Center=�5(      ��5'   0   �� *ShowViewCommand+5(      �� 5)      $��Show admin view��6   $��Admin��6S   $��Center=�5*      $��2,2,0,0q�6,   ��5)   /   �� *ShowViewCommand+5*   ,   5+      5,      5-      