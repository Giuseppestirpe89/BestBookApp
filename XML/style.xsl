<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


<xsl:template match="/">
  <html>
  <body>
  <h2>Restaurant Detail</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Name</th>
        <th>Location</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>Food</th>
        <th>Tel</th>
      </tr>
      <xsl:for-each select="catalog/restaurant">
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="location"/></td>
        <td><xsl:value-of select="address1"/></td>
        <td><xsl:value-of select="address2"/></td>
        <td><xsl:value-of select="food"/></td>
        <td><xsl:value-of select="tel"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet> 