from django.db import models

# Create your models here.

class nav_bar(models.Model):
    navigation = models.CharField(max_length= 20, verbose_name= 'Название раздела')
    description = models.TextField(max_length= 100, verbose_name= 'Описание', default="")

    class Meta:
        verbose_name = 'Навигация'
        verbose_name_plural = 'Навигации'
    def __str__(self):
        return self.navigation

