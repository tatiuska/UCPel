<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>XSL de Teste</title>
            </head>
            <body bgcolor="#FF0000">
                <table border="1" cellpadding="2">
                    <tr>
                        <td>nome</td>
                        <td>português</td>
                        <td>matemática</td>
                        <td>ciências</td>
                    </tr>
                    <xsl:for-each select="aluno">
                        <tr>
                            <td><xsl:value-of select="nome" /></td>
                            <td><xsl:value-of select="portugues" /></td>
                            <td><xsl:value-of select="matematica" /></td>
                            <td><xsl:value-of select="ciencias" /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>