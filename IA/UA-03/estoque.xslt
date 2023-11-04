<?xml version="1.0" encoding="UTF-8"?>
<!-- código do Infográfico, mas não funcionou -->
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <h2>Situação do Estoque</h2>
                <table border="1">
                    <tr style="background-color:#3399FF">
                        <th>Código</th>
                        <th>Produto</th>
                        <th>Estoque</th>
                    </tr>
                    <xsl:for-each select="Produtos/produto">
                        <tr>
                            <xsl:if test="position() mod 2 = 1">
                                <xsl:attribute name="style">
                                    background-color:#E0E0E0
                                </xsl:attribute>
                            </xsl:if>
                            <td><xsl:value-of select="codigo" /></td>
                            <td><xsl:value-of select="nome" /></td>
                            <td><xsl:value-of select="estoque" /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>