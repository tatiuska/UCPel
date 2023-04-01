#!/usr/bin/env python
# coding: utf-8

# In[2]:


#Carregando o conjunto de dados
import pandas as pd
arquivo = pd.read_csv('D:/UCPEL/IA-ML/HDI-2015.csv')


# In[3]:


arquivo.head()


# In[4]:


arquivo.tail()


# In[5]:


#Separando as variáveis entre preditoras e variável-alvo
y = arquivo['HighBP']
x = arquivo.drop('HighBP', axis = 1)


# In[6]:


from sklearn.model_selection import train_test_split

#Criando os conjuntos de dados de treino e teste:
x_treino, x_teste, y_treino, y_teste = train_test_split(x, y, test_size = 0.3)


# In[7]:


arquivo.shape


# In[8]:


#Criação do modelo
from sklearn.ensemble import ExtraTreesClassifier
modelo = ExtraTreesClassifier()
modelo.fit(x_treino, y_treino)

#Imprimindo resultados
resultado = modelo.score(x_teste, y_teste)
print("Acurácia:", resultado)


# In[9]:


y_teste[400:403]


# In[10]:


x_teste[400:403]


# In[11]:


previsoes = modelo.predict(x_teste[400:403])


# In[12]:


previsoes


# In[ ]:




