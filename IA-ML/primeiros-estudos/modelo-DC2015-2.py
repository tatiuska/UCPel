#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
arquivo = pd.read_csv('D:/UCPEL/IA-ML/HDI-2015.csv')


# In[2]:


arquivo.head()


# In[3]:


y = arquivo['PhysActivity']
x = arquivo.drop('PhysActivity', axis = 1)


# In[5]:


from sklearn.model_selection import train_test_split

x_treino, x_teste, y_treino, y_teste = train_test_split(x, y, test_size = 0.3)


# In[6]:


arquivo.shape


# In[7]:


from sklearn.ensemble import ExtraTreesClassifier
modelo = ExtraTreesClassifier()
modelo.fit(x_treino,y_treino)

resultado = modelo.score(x_teste,y_teste)
print("Acurácia:", resultado)


# In[8]:


y_teste[400:403]


# In[9]:


x_teste[400:403]


# In[10]:


previsoes = modelo.predict(x_teste[400:403])


# In[11]:


previsoes


# In[ ]:




