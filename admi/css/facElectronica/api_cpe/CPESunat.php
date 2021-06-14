<?php
require_once('../funcionesGlobales/validaciones.php');

function cpeFacturaPrueba($ruta) {
    $doc = new DOMDocument();
    $doc->formatOutput = FALSE;
    $doc->preserveWhiteSpace = TRUE;
    $doc->encoding = 'ISO-8859-1';
    $xmlCPE = '<?xml version="1.0" encoding="ISO-8859-1" standalone="no"?>
                <Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:ccts="urn:un:unece:uncefact:documentation:2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2" xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" xmlns:schemaLocation="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2" xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
                <ext:UBLExtensions>
                <ext:UBLExtension>
                <ext:ExtensionContent>
                <sac:AdditionalInformation>
                <sac:AdditionalMonetaryTotal>
                <cbc:ID>1001</cbc:ID>
                <cbc:PayableAmount currencyID="PEN">625.0</cbc:PayableAmount>
                </sac:AdditionalMonetaryTotal>
                <sac:AdditionalMonetaryTotal>
                <cbc:ID>1002</cbc:ID>
                <cbc:PayableAmount currencyID="PEN">0.0</cbc:PayableAmount>
                </sac:AdditionalMonetaryTotal>
                <sac:AdditionalMonetaryTotal>
                <cbc:ID>1003</cbc:ID>
                <cbc:PayableAmount currencyID="PEN">0.0</cbc:PayableAmount>
                </sac:AdditionalMonetaryTotal>
                <sac:AdditionalMonetaryTotal>
                <cbc:ID>1004</cbc:ID>
                <cbc:PayableAmount currencyID="PEN">0.0</cbc:PayableAmount>
                </sac:AdditionalMonetaryTotal>
                <sac:AdditionalProperty>
                <cbc:ID>1000</cbc:ID>
                <cbc:Value>SETECIENTOS TREINTA Y SIETE CON 50/100 SOLES</cbc:Value>
                </sac:AdditionalProperty>
                </sac:AdditionalInformation>
                </ext:ExtensionContent>
                </ext:UBLExtension>
                <ext:UBLExtension>
                <ext:ExtensionContent>
                </ext:ExtensionContent>
                </ext:UBLExtension>
                </ext:UBLExtensions>
                <cbc:UBLVersionID>2.0</cbc:UBLVersionID>
                <cbc:CustomizationID>1.0</cbc:CustomizationID>
                <cbc:ID>F001-5079</cbc:ID>
                <cbc:IssueDate>2017-05-10</cbc:IssueDate>
                <cbc:InvoiceTypeCode>01</cbc:InvoiceTypeCode>
                <cbc:DocumentCurrencyCode>PEN</cbc:DocumentCurrencyCode>
                <cac:Signature>
                <cbc:ID>F001-5079</cbc:ID>
                <cac:SignatoryParty>
                <cac:PartyIdentification>
                <cbc:ID>10447915125</cbc:ID>
                </cac:PartyIdentification>
                <cac:PartyName>
                <cbc:Name><![CDATA[JOSE LUI ZAMBRANO YACHA]]></cbc:Name>
                </cac:PartyName>
                </cac:SignatoryParty>
                <cac:DigitalSignatureAttachment>
                <cac:ExternalReference>
                <cbc:URI>#F001-5079</cbc:URI>
                </cac:ExternalReference>
                </cac:DigitalSignatureAttachment>
                </cac:Signature>
                <cac:AccountingSupplierParty>
                <cbc:CustomerAssignedAccountID>10447915125</cbc:CustomerAssignedAccountID>
                <cbc:AdditionalAccountID>6</cbc:AdditionalAccountID>
                <cac:Party>
                <cac:PartyName>
                <cbc:Name><![CDATA[JOSE LUI ZAMBRANO YACHA]]></cbc:Name>
                </cac:PartyName>
                <cac:PostalAddress>
                <cbc:ID>070104</cbc:ID>
                <cbc:StreetName><![CDATA[PSJ HUAMPANI]]></cbc:StreetName>
                <cbc:CitySubdivisionName/>
                <cbc:CityName><![CDATA[LIMA]]></cbc:CityName>
                <cbc:CountrySubentity><![CDATA[LIMA]]></cbc:CountrySubentity>
                <cbc:District><![CDATA[CHACLACAYO]]></cbc:District>
                <cac:Country>
                <cbc:IdentificationCode>PE</cbc:IdentificationCode>
                </cac:Country>
                </cac:PostalAddress>
                <cac:PartyLegalEntity>
                <cbc:RegistrationName><![CDATA[JOSE LUI ZAMBRANO YACHA]]></cbc:RegistrationName>
                </cac:PartyLegalEntity>
                </cac:Party>
                </cac:AccountingSupplierParty>
                <cac:AccountingCustomerParty>
                <cbc:CustomerAssignedAccountID>10447915125</cbc:CustomerAssignedAccountID>
                <cbc:AdditionalAccountID>6</cbc:AdditionalAccountID>
                <cac:Party>
                <cac:PhysicalLocation>
                <cbc:Description><![CDATA[HUAMPANI ALTO ZON 1 MZ B LT 6]]></cbc:Description>
                </cac:PhysicalLocation>
                <cac:PartyLegalEntity>
                <cbc:RegistrationName><![CDATA[JOSE LUIS ZAMBRANO YACHA]]></cbc:RegistrationName>
                <cac:RegistrationAddress>
                <cbc:StreetName><![CDATA[LIMA]]></cbc:StreetName>
                <cac:Country>
                <cbc:IdentificationCode>PE</cbc:IdentificationCode>
                </cac:Country>
                </cac:RegistrationAddress>
                </cac:PartyLegalEntity>
                </cac:Party>
                </cac:AccountingCustomerParty>
                <cac:TaxTotal>
                <cbc:TaxAmount currencyID="PEN">112.5</cbc:TaxAmount>
                <cac:TaxSubtotal>
                <cbc:TaxAmount currencyID="PEN">112.5</cbc:TaxAmount>
                <cac:TaxCategory>
                <cac:TaxScheme>
                <cbc:ID>1000</cbc:ID>
                <cbc:Name>IGV</cbc:Name>
                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
                </cac:TaxScheme>
                </cac:TaxCategory>
                </cac:TaxSubtotal>
                </cac:TaxTotal>
                <cac:LegalMonetaryTotal>
                <cbc:LineExtensionAmount currencyID="PEN">625.0</cbc:LineExtensionAmount>
                <cbc:TaxExclusiveAmount currencyID="PEN">112.5</cbc:TaxExclusiveAmount>
                <cbc:PayableAmount currencyID="PEN">737.5</cbc:PayableAmount>
                </cac:LegalMonetaryTotal>
                <cac:InvoiceLine>
                <cbc:ID>1</cbc:ID>
                <cbc:InvoicedQuantity unitCode="NIU">1.00001</cbc:InvoicedQuantity>
                <cbc:LineExtensionAmount currencyID="PEN">625.0</cbc:LineExtensionAmount>
                <cac:PricingReference>
                <cac:AlternativeConditionPrice>
                <cbc:PriceAmount currencyID="PEN">737.5</cbc:PriceAmount>
                <cbc:PriceTypeCode>01</cbc:PriceTypeCode>
                </cac:AlternativeConditionPrice>
                </cac:PricingReference>
                <cac:TaxTotal>
                <cbc:TaxAmount currencyID="PEN">112.5</cbc:TaxAmount>
                <cac:TaxSubtotal>
                <cbc:TaxAmount currencyID="PEN">112.5</cbc:TaxAmount>
                <cac:TaxCategory>
                <cbc:TaxExemptionReasonCode>10</cbc:TaxExemptionReasonCode>
                <cac:TaxScheme>
                <cbc:ID>1000</cbc:ID>
                <cbc:Name>IGV</cbc:Name>
                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
                </cac:TaxScheme>
                </cac:TaxCategory>
                </cac:TaxSubtotal>
                </cac:TaxTotal>
                <cac:Item>
                <cbc:Description><![CDATA[PRUEBA]]></cbc:Description>
                <cac:SellersItemIdentification>
                <cbc:ID><![CDATA[0001]]></cbc:ID>
                </cac:SellersItemIdentification>
                </cac:Item>
                <cac:Price>
                <cbc:PriceAmount currencyID="PEN">625.0</cbc:PriceAmount>
                </cac:Price>
                </cac:InvoiceLine>
                </Invoice>
            ';

    $doc->loadXML($xmlCPE);
    $doc->save(dirname(__FILE__) . '/' . $ruta . '.XML');

    return '1';
}

//      private int ID;
//	private String FECHA_REGISTRO;
//	private int ID_EMPRESA;
//	private int ID_CLIENTE_CPE;
function cpeFactura(
$ruta,
 //===================
        $cabecera, $detalle
) {
    $doc = new DOMDocument();
    $doc->formatOutput = FALSE;
    $doc->preserveWhiteSpace = TRUE;
    $doc->encoding = 'ISO-8859-1';

    $xmlCPE = '<?xml version="1.0" encoding="ISO-8859-1" standalone="no"?>
                <Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:ccts="urn:un:unece:uncefact:documentation:2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2" xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" xmlns:schemaLocation="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2" xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
                <ext:UBLExtensions>
                <ext:UBLExtension>
                <ext:ExtensionContent>
                <sac:AdditionalInformation>
                    <sac:AdditionalMonetaryTotal>
                        <cbc:ID>1001</cbc:ID>
                        <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_GRAVADAS"] . '</cbc:PayableAmount>
                    </sac:AdditionalMonetaryTotal>
                    <sac:AdditionalMonetaryTotal>
                        <cbc:ID>1002</cbc:ID>
                        <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_INAFECTA"] . '</cbc:PayableAmount>
                    </sac:AdditionalMonetaryTotal>
                    <sac:AdditionalMonetaryTotal>
                        <cbc:ID>1003</cbc:ID>
                        <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_EXONERADAS"] . '</cbc:PayableAmount>
                    </sac:AdditionalMonetaryTotal>
                    <sac:AdditionalMonetaryTotal>
                        <cbc:ID>1004</cbc:ID>
                        <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_GRATUITAS"] . '</cbc:PayableAmount>
                    </sac:AdditionalMonetaryTotal>';
                    if($cabecera["TOTAL_LETRAS"]<>""){
                    $xmlCPE = $xmlCPE . 
                    '<sac:AdditionalProperty>
                        <cbc:ID>1000</cbc:ID>
                        <cbc:Value>' . $cabecera["TOTAL_LETRAS"] . '</cbc:Value>
                    </sac:AdditionalProperty>';
                   }
                   if($cabecera["TOTAL_GRATUITAS"]>0){
                    $xmlCPE = $xmlCPE . 
                    '<sac:AdditionalProperty>
                        <cbc:ID>1002</cbc:ID>
                        <cbc:Value>TRANSFERENCIA GRATUITA DE UN BIEN Y/O SERVICIO PRESTADO GRATUITAMENTE</cbc:Value>
                    </sac:AdditionalProperty>';
                   }
$xmlCPE = $xmlCPE . '</sac:AdditionalInformation>
                </ext:ExtensionContent>
                </ext:UBLExtension>
                <ext:UBLExtension>
                <ext:ExtensionContent>
                </ext:ExtensionContent>
                </ext:UBLExtension>
                </ext:UBLExtensions>
                <cbc:UBLVersionID>2.0</cbc:UBLVersionID>
                <cbc:CustomizationID>1.0</cbc:CustomizationID>
                <cbc:ID>' . $cabecera["NRO_COMPROBANTE"] . '</cbc:ID>
                <cbc:IssueDate>' . $cabecera["FECHA_DOCUMENTO"] . '</cbc:IssueDate>
                <cbc:InvoiceTypeCode>' . $cabecera["COD_TIPO_DOCUMENTO"] . '</cbc:InvoiceTypeCode>
                <cbc:DocumentCurrencyCode>' . $cabecera["COD_MONEDA"] . '</cbc:DocumentCurrencyCode>                    
                <cac:Signature>
                    <cbc:ID>' . $cabecera["NRO_COMPROBANTE"] . '</cbc:ID>
                    <cac:SignatoryParty>
                        <cac:PartyIdentification>
                            <cbc:ID>' . $cabecera["NRO_DOCUMENTO_EMPRESA"] . '</cbc:ID>
                        </cac:PartyIdentification>                        
                        <cac:PartyName>
                            <cbc:Name><![CDATA[' . $cabecera["RAZON_SOCIAL_EMPRESA"] . ']]></cbc:Name>
                        </cac:PartyName>                        
                    </cac:SignatoryParty>
                    <cac:DigitalSignatureAttachment>
                        <cac:ExternalReference>
                            <cbc:URI>#' . $cabecera["NRO_COMPROBANTE"] . '</cbc:URI>
                        </cac:ExternalReference>
                    </cac:DigitalSignatureAttachment>
                </cac:Signature>                
                <cac:AccountingSupplierParty>
                    <cbc:CustomerAssignedAccountID>' . $cabecera["NRO_DOCUMENTO_EMPRESA"] . '</cbc:CustomerAssignedAccountID>
                    <cbc:AdditionalAccountID>' . $cabecera["TIPO_DOCUMENTO_EMPRESA"] . '</cbc:AdditionalAccountID>
                    <cac:Party>
                        <cac:PartyName>
                            <cbc:Name><![CDATA[' . $cabecera["NOMBRE_COMERCIAL_EMPRESA"] . ']]></cbc:Name>
                        </cac:PartyName>
                        <cac:PostalAddress>
                            <cbc:ID>' . $cabecera["CODIGO_UBIGEO_EMPRESA"] . '</cbc:ID>
                            <cbc:StreetName><![CDATA[' . $cabecera["DIRECCION_EMPRESA"] . ']]></cbc:StreetName>
                            <cbc:CitySubdivisionName/>
                            <cbc:CityName><![CDATA[' . $cabecera["DEPARTAMENTO_EMPRESA"] . ']]></cbc:CityName>
                            <cbc:CountrySubentity><![CDATA[' . $cabecera["PROVINCIA_EMPRESA"] . ']]></cbc:CountrySubentity>
                            <cbc:District><![CDATA[' . $cabecera["DISTRITO_EMPRESA"] . ']]></cbc:District>
                            <cac:Country>
                                <cbc:IdentificationCode>' . $cabecera["CODIGO_PAIS_EMPRESA"] . '</cbc:IdentificationCode>
                            </cac:Country>
                        </cac:PostalAddress>
                        <cac:PartyLegalEntity>
                        <cbc:RegistrationName><![CDATA[' . $cabecera["RAZON_SOCIAL_EMPRESA"] . ']]></cbc:RegistrationName>
                        </cac:PartyLegalEntity>
                    </cac:Party>
                </cac:AccountingSupplierParty>
                <cac:AccountingCustomerParty>
                    <cbc:CustomerAssignedAccountID>' . $cabecera["NRO_DOCUMENTO_CLIENTE"] . '</cbc:CustomerAssignedAccountID>
                    <cbc:AdditionalAccountID>' . $cabecera["TIPO_DOCUMENTO_CLIENTE"] . '</cbc:AdditionalAccountID>
                    <cac:Party>
                        <cac:PhysicalLocation>
                            <cbc:Description><![CDATA[' . $cabecera["DIRECCION_CLIENTE"] . ']]></cbc:Description>
                        </cac:PhysicalLocation>
                        <cac:PartyLegalEntity>
                            <cbc:RegistrationName><![CDATA[' . $cabecera["RAZON_SOCIAL_CLIENTE"] . ']]></cbc:RegistrationName>
                            <cac:RegistrationAddress>
                                <cbc:StreetName><![CDATA[' . $cabecera["CIUDAD_CLIENTE"] . ']]></cbc:StreetName>
                                <cac:Country>
                                    <cbc:IdentificationCode>' . $cabecera["COD_PAIS_CLIENTE"] . '</cbc:IdentificationCode>
                                </cac:Country>
                            </cac:RegistrationAddress>
                        </cac:PartyLegalEntity>
                    </cac:Party>
                </cac:AccountingCustomerParty>
                <cac:TaxTotal>
                    <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxAmount>
                    <cac:TaxSubtotal>
                        <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxAmount>
                        <cac:TaxCategory>
                            <cac:TaxScheme>
                                <cbc:ID>1000</cbc:ID>
                                <cbc:Name>IGV</cbc:Name>
                                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
                            </cac:TaxScheme>
                            </cac:TaxCategory>
                    </cac:TaxSubtotal>
                </cac:TaxTotal>
                <cac:LegalMonetaryTotal>
                    <cbc:LineExtensionAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["SUB_TOTAL"] . '</cbc:LineExtensionAmount>
                    <cbc:TaxExclusiveAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxExclusiveAmount>
                    <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL"] . '</cbc:PayableAmount>
                </cac:LegalMonetaryTotal>';

    for ($i = 0; $i < count($detalle); $i++) {
        $xmlCPE = $xmlCPE . '<cac:InvoiceLine>
                                <cbc:ID>' . $detalle[$i]["txtITEM"] . '</cbc:ID>
                                <cbc:InvoicedQuantity unitCode="' . $detalle[$i]["txtUNIDAD_MEDIDA_DET"] . '">' . $detalle[$i]["txtCANTIDAD_DET"] . '</cbc:InvoicedQuantity>
                                <cbc:LineExtensionAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIMPORTE_DET"] . '</cbc:LineExtensionAmount>
                                <cac:PricingReference>
                                    <cac:AlternativeConditionPrice>
                                        <cbc:PriceAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtPRECIO_DET"] . '</cbc:PriceAmount>
                                        <cbc:PriceTypeCode>' . $detalle[$i]["txtPRECIO_TIPO_CODIGO"] . '</cbc:PriceTypeCode>
                                    </cac:AlternativeConditionPrice>
                                </cac:PricingReference>
                                <cac:TaxTotal>
                                    <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIGV"] . '</cbc:TaxAmount>
                                    <cac:TaxSubtotal>
                                        <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIGV"] . '</cbc:TaxAmount>
                                        <cac:TaxCategory>
                                            <cbc:TaxExemptionReasonCode>' . $detalle[$i]["txtCOD_TIPO_OPERACION"] . '</cbc:TaxExemptionReasonCode>
                                            <cac:TaxScheme>
                                                <cbc:ID>1000</cbc:ID>
                                                <cbc:Name>IGV</cbc:Name>
                                                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
                                            </cac:TaxScheme>
                                        </cac:TaxCategory>
                                    </cac:TaxSubtotal>
                                </cac:TaxTotal>
                                <cac:Item>
                                    <cbc:Description><![CDATA[' . ValidarCaracteresInv((isset($detalle[$i]["txtDESCRIPCION_DET"]))?$detalle[$i]["txtDESCRIPCION_DET"]:"") . ']]></cbc:Description>
                                    <cac:SellersItemIdentification>
                                        <cbc:ID><![CDATA[' . ValidarCaracteresInv((isset($detalle[$i]["txtCODIGO_DET"]))?$detalle[$i]["txtCODIGO_DET"]:"") . ']]></cbc:ID>
                                    </cac:SellersItemIdentification>
                                </cac:Item>
                                <cac:Price>
                                    <cbc:PriceAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtPRECIO_DET"] . '</cbc:PriceAmount>
                                </cac:Price>
                            </cac:InvoiceLine>';
    }

    $xmlCPE = $xmlCPE . '</Invoice>';

    $doc->loadXML($xmlCPE);
    $doc->save(dirname(__FILE__) . '/' . $ruta . '.XML');
    return 'XML CREADO';
}

function cpeNC(
$ruta, $cabecera, $detalle
) {
    $doc = new DOMDocument();
    $doc->formatOutput = FALSE;
    $doc->preserveWhiteSpace = TRUE;
    $doc->encoding = 'ISO-8859-1';
    $xmlCPE = '<?xml version="1.0" encoding="ISO-8859-1" standalone="no"?><CreditNote xmlns="urn:oasis:names:specification:ubl:schema:xsd:CreditNote-2" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:ccts="urn:un:unece:uncefact:documentation:2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2" xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
<ext:UBLExtensions>
<ext:UBLExtension>
<ext:ExtensionContent>
    <sac:AdditionalInformation>
        <sac:AdditionalMonetaryTotal>
            <cbc:ID>1001</cbc:ID>
            <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_GRAVADAS"] . '</cbc:PayableAmount>
        </sac:AdditionalMonetaryTotal>
    </sac:AdditionalInformation>
</ext:ExtensionContent>
</ext:UBLExtension>
<ext:UBLExtension>
<ext:ExtensionContent>
</ext:ExtensionContent>
</ext:UBLExtension>
</ext:UBLExtensions>
<cbc:UBLVersionID>2.0</cbc:UBLVersionID>
<cbc:CustomizationID>1.0</cbc:CustomizationID>
<cbc:ID>' . $cabecera["NRO_COMPROBANTE"] . '</cbc:ID>
<cbc:IssueDate>' . $cabecera["FECHA_DOCUMENTO"] . '</cbc:IssueDate>
<cbc:DocumentCurrencyCode>' . $cabecera["COD_MONEDA"] . '</cbc:DocumentCurrencyCode>
<cac:DiscrepancyResponse>
    <cbc:ReferenceID>' . $cabecera["NRO_DOCUMENTO_MODIFICA"] . '</cbc:ReferenceID>
    <cbc:ResponseCode>' . $cabecera["COD_TIPO_MOTIVO"] . '</cbc:ResponseCode>
    <cbc:Description><![CDATA[' . $cabecera["DESCRIPCION_MOTIVO"] . ']]></cbc:Description>
</cac:DiscrepancyResponse>
<cac:BillingReference>
    <cac:InvoiceDocumentReference>
        <cbc:ID>' . $cabecera["NRO_DOCUMENTO_MODIFICA"] . '</cbc:ID>
        <cbc:DocumentTypeCode>' . $cabecera["TIPO_COMPROBANTE_MODIFICA"] . '</cbc:DocumentTypeCode>
    </cac:InvoiceDocumentReference>
</cac:BillingReference>
<cac:Signature>
    <cbc:ID>' . $cabecera["NRO_COMPROBANTE"] . '</cbc:ID>
    <cac:SignatoryParty>
        <cac:PartyIdentification>
            <cbc:ID>' . $cabecera["NRO_DOCUMENTO_EMPRESA"] . '</cbc:ID>
        </cac:PartyIdentification>
        <cac:PartyName>
            <cbc:Name><![CDATA[' . $cabecera["RAZON_SOCIAL_EMPRESA"] . ']]></cbc:Name>
        </cac:PartyName>
    </cac:SignatoryParty>
    <cac:DigitalSignatureAttachment>
        <cac:ExternalReference>
            <cbc:URI>#' . $cabecera["NRO_COMPROBANTE"] . '</cbc:URI>
        </cac:ExternalReference>
    </cac:DigitalSignatureAttachment>
</cac:Signature>
<cac:AccountingSupplierParty>
    <cbc:CustomerAssignedAccountID>' . $cabecera["NRO_DOCUMENTO_EMPRESA"] . '</cbc:CustomerAssignedAccountID>
    <cbc:AdditionalAccountID>' . $cabecera["TIPO_DOCUMENTO_EMPRESA"] . '</cbc:AdditionalAccountID>
    <cac:Party>
        <cac:PartyName>
            <cbc:Name><![CDATA[' . $cabecera["NOMBRE_COMERCIAL_EMPRESA"] . ']]></cbc:Name>
        </cac:PartyName>
        <cac:PostalAddress>
            <cbc:ID>' . $cabecera["CODIGO_UBIGEO_EMPRESA"] . '</cbc:ID>
            <cbc:StreetName><![CDATA[' . $cabecera["DIRECCION_EMPRESA"] . ']]></cbc:StreetName>
            <cbc:CitySubdivisionName/>
            <cbc:CityName><![CDATA[' . $cabecera["DEPARTAMENTO_EMPRESA"] . ']]></cbc:CityName>
            <cbc:CountrySubentity><![CDATA[' . $cabecera["PROVINCIA_EMPRESA"] . ']]></cbc:CountrySubentity>
            <cbc:District><![CDATA[' . $cabecera["DISTRITO_EMPRESA"] . ']]></cbc:District>
            <cac:Country>
                <cbc:IdentificationCode>' . $cabecera["CODIGO_PAIS_EMPRESA"] . '</cbc:IdentificationCode>
            </cac:Country>
        </cac:PostalAddress>
        <cac:PartyLegalEntity>
            <cbc:RegistrationName><![CDATA[' . $cabecera["RAZON_SOCIAL_EMPRESA"] . ']]></cbc:RegistrationName>
        </cac:PartyLegalEntity>
    </cac:Party>
</cac:AccountingSupplierParty>
<cac:AccountingCustomerParty>
    <cbc:CustomerAssignedAccountID>' . $cabecera["NRO_DOCUMENTO_CLIENTE"] . '</cbc:CustomerAssignedAccountID>
    <cbc:AdditionalAccountID>' . $cabecera["TIPO_DOCUMENTO_CLIENTE"] . '</cbc:AdditionalAccountID>
    <cac:Party>
        <cac:PhysicalLocation>
            <cbc:Description><![CDATA[' . $cabecera["DIRECCION_CLIENTE"] . ']]></cbc:Description>
        </cac:PhysicalLocation>
        <cac:PartyLegalEntity>
            <cbc:RegistrationName><![CDATA[' . $cabecera["RAZON_SOCIAL_CLIENTE"] . ']]></cbc:RegistrationName>
            <cac:RegistrationAddress>
                <cbc:StreetName><![CDATA[' . $cabecera["CIUDAD_CLIENTE"] . ']]></cbc:StreetName>
                <cac:Country>
                    <cbc:IdentificationCode>' . $cabecera["COD_PAIS_CLIENTE"] . '</cbc:IdentificationCode>
                </cac:Country>
            </cac:RegistrationAddress>
        </cac:PartyLegalEntity>
    </cac:Party>
</cac:AccountingCustomerParty>
<cac:TaxTotal>
    <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxAmount>
    <cac:TaxSubtotal>
        <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxAmount>
        <cac:TaxCategory>
            <cac:TaxScheme>
                <cbc:ID>1000</cbc:ID>
                <cbc:Name>IGV</cbc:Name>
                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
            </cac:TaxScheme>
        </cac:TaxCategory>
    </cac:TaxSubtotal>
</cac:TaxTotal>
<cac:LegalMonetaryTotal>
    <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL"] . '</cbc:PayableAmount>
</cac:LegalMonetaryTotal>';

    for ($i = 0; $i < count($detalle); $i++) {
        $xmlCPE = $xmlCPE . '<cac:CreditNoteLine>
                                <cbc:ID>' . $detalle[$i]["txtITEM"] . '</cbc:ID>
                                <cbc:CreditedQuantity unitCode="' . $detalle[$i]["txtUNIDAD_MEDIDA_DET"] . '">' . $detalle[$i]["txtCANTIDAD_DET"] . '</cbc:CreditedQuantity>
                                <cbc:LineExtensionAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIMPORTE_DET"] . '</cbc:LineExtensionAmount>
                                <cac:PricingReference>
                                    <cac:AlternativeConditionPrice>
                                        <cbc:PriceAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtPRECIO_DET"] . '</cbc:PriceAmount>
                                        <cbc:PriceTypeCode>' . $detalle[$i]["txtPRECIO_TIPO_CODIGO"] . '</cbc:PriceTypeCode>
                                    </cac:AlternativeConditionPrice>
                                </cac:PricingReference>
                                <cac:TaxTotal>
                                    <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIGV"] . '</cbc:TaxAmount>
                                    <cac:TaxSubtotal>
                                    <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIGV"] . '</cbc:TaxAmount>
                                    <cac:TaxCategory>
                                        <cbc:TaxExemptionReasonCode>' . $detalle[$i]["txtCOD_TIPO_OPERACION"] . '</cbc:TaxExemptionReasonCode>
                                        <cac:TaxScheme>
                                            <cbc:ID>1000</cbc:ID>
                                            <cbc:Name>IGV</cbc:Name>
                                            <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
                                        </cac:TaxScheme>
                                    </cac:TaxCategory>
                                    </cac:TaxSubtotal>
                                </cac:TaxTotal>
                                <cac:Item>
                                    <cbc:Description><![CDATA[' . ValidarCaracteresInv((isset($detalle[$i]["txtDESCRIPCION_DET"]))?$detalle[$i]["txtDESCRIPCION_DET"]:"") . ']]></cbc:Description>
                                    <cac:SellersItemIdentification>
                                        <cbc:ID><![CDATA[' . ValidarCaracteresInv((isset($detalle[$i]["txtCODIGO_DET"]))?$detalle[$i]["txtCODIGO_DET"]:"") . ']]></cbc:ID>
                                    </cac:SellersItemIdentification>
                                </cac:Item>
                                <cac:Price>
                                    <cbc:PriceAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtPRECIO_DET"] . '</cbc:PriceAmount>
                                </cac:Price>
                                </cac:CreditNoteLine>';
    }

    $xmlCPE = $xmlCPE . '</CreditNote>';

    $doc->loadXML($xmlCPE);
    $doc->save(dirname(__FILE__) . '/' . $ruta . '.XML');

    return 'XML CREADO';
}

function cpeND($ruta,
 //===================
        $cabecera, $detalle) {
    $doc = new DOMDocument();
    $doc->formatOutput = FALSE;
    $doc->preserveWhiteSpace = TRUE;
    $doc->encoding = 'ISO-8859-1';
    $xmlCPE = '<?xml version="1.0" encoding="ISO-8859-1" standalone="no"?><DebitNote xmlns="urn:oasis:names:specification:ubl:schema:xsd:DebitNote-2" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:ccts="urn:un:unece:uncefact:documentation:2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2" xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
<ext:UBLExtensions>
<ext:UBLExtension>
<ext:ExtensionContent>
<sac:AdditionalInformation>
<sac:AdditionalMonetaryTotal>
<cbc:ID>1001</cbc:ID>
<cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_GRAVADAS"] . '</cbc:PayableAmount>
</sac:AdditionalMonetaryTotal>
</sac:AdditionalInformation>
</ext:ExtensionContent>
</ext:UBLExtension>
<ext:UBLExtension>
<ext:ExtensionContent>
</ext:ExtensionContent>
</ext:UBLExtension>
</ext:UBLExtensions>
<cbc:UBLVersionID>2.0</cbc:UBLVersionID>
<cbc:CustomizationID>1.0</cbc:CustomizationID>
<cbc:ID>' . $cabecera["NRO_COMPROBANTE"] . '</cbc:ID>
<cbc:IssueDate>' . $cabecera["FECHA_DOCUMENTO"] . '</cbc:IssueDate>
<cbc:DocumentCurrencyCode>' . $cabecera["COD_MONEDA"] . '</cbc:DocumentCurrencyCode>
<cac:DiscrepancyResponse>
    <cbc:ReferenceID>' . $cabecera["NRO_DOCUMENTO_MODIFICA"] . '</cbc:ReferenceID>
    <cbc:ResponseCode>' . $cabecera["COD_TIPO_MOTIVO"] . '</cbc:ResponseCode>
    <cbc:Description><![CDATA[' . $cabecera["DESCRIPCION_MOTIVO"] . ']]></cbc:Description>
</cac:DiscrepancyResponse>
<cac:BillingReference>
    <cac:InvoiceDocumentReference>
        <cbc:ID>' . $cabecera["NRO_DOCUMENTO_MODIFICA"] . '</cbc:ID>
        <cbc:DocumentTypeCode>' . $cabecera["TIPO_COMPROBANTE_MODIFICA"] . '</cbc:DocumentTypeCode>
    </cac:InvoiceDocumentReference>
</cac:BillingReference>
<cac:Signature>
    <cbc:ID>' . $cabecera["NRO_COMPROBANTE"] . '</cbc:ID>
    <cac:SignatoryParty>
        <cac:PartyIdentification>
            <cbc:ID>' . $cabecera["NRO_DOCUMENTO_EMPRESA"] . '</cbc:ID>
        </cac:PartyIdentification>
        <cac:PartyName>
            <cbc:Name><![CDATA[' . $cabecera["RAZON_SOCIAL_EMPRESA"] . ']]></cbc:Name>
        </cac:PartyName>
    </cac:SignatoryParty>
    <cac:DigitalSignatureAttachment>
        <cac:ExternalReference>
            <cbc:URI>#' . $cabecera["NRO_COMPROBANTE"] . '</cbc:URI>
        </cac:ExternalReference>
    </cac:DigitalSignatureAttachment>
</cac:Signature>
<cac:AccountingSupplierParty>
<cbc:CustomerAssignedAccountID>' . $cabecera["NRO_DOCUMENTO_EMPRESA"] . '</cbc:CustomerAssignedAccountID>
    <cbc:AdditionalAccountID>' . $cabecera["TIPO_DOCUMENTO_EMPRESA"] . '</cbc:AdditionalAccountID>
    <cac:Party>
        <cac:PartyName>
            <cbc:Name><![CDATA[' . $cabecera["NOMBRE_COMERCIAL_EMPRESA"] . ']]></cbc:Name>
        </cac:PartyName>
        <cac:PostalAddress>
            <cbc:ID>' . $cabecera["CODIGO_UBIGEO_EMPRESA"] . '</cbc:ID>
            <cbc:StreetName><![CDATA[' . $cabecera["DIRECCION_EMPRESA"] . ']]></cbc:StreetName>
            <cbc:CitySubdivisionName/>
            <cbc:CityName><![CDATA[' . $cabecera["DEPARTAMENTO_EMPRESA"] . ']]></cbc:CityName>
            <cbc:CountrySubentity><![CDATA[' . $cabecera["PROVINCIA_EMPRESA"] . ']]></cbc:CountrySubentity>
            <cbc:District><![CDATA[' . $cabecera["DISTRITO_EMPRESA"] . ']]></cbc:District>
            <cac:Country>
                <cbc:IdentificationCode>' . $cabecera["CODIGO_PAIS_EMPRESA"] . '</cbc:IdentificationCode>
            </cac:Country>
        </cac:PostalAddress>
        <cac:PartyLegalEntity>
            <cbc:RegistrationName><![CDATA[' . $cabecera["RAZON_SOCIAL_EMPRESA"] . ']]></cbc:RegistrationName>
        </cac:PartyLegalEntity>
    </cac:Party>
</cac:AccountingSupplierParty>
<cac:AccountingCustomerParty>
    <cbc:CustomerAssignedAccountID>' . $cabecera["NRO_DOCUMENTO_CLIENTE"] . '</cbc:CustomerAssignedAccountID>
    <cbc:AdditionalAccountID>' . $cabecera["TIPO_DOCUMENTO_CLIENTE"] . '</cbc:AdditionalAccountID>
    <cac:Party>
        <cac:PhysicalLocation>
            <cbc:Description><![CDATA[' . $cabecera["DIRECCION_CLIENTE"] . ']]></cbc:Description>
        </cac:PhysicalLocation>
        <cac:PartyLegalEntity>
            <cbc:RegistrationName><![CDATA[' . $cabecera["RAZON_SOCIAL_CLIENTE"] . ']]></cbc:RegistrationName>
            <cac:RegistrationAddress>
                <cbc:StreetName><![CDATA[' . $cabecera["CIUDAD_CLIENTE"] . ']]></cbc:StreetName>
                <cac:Country>
                    <cbc:IdentificationCode>' . $cabecera["COD_PAIS_CLIENTE"] . '</cbc:IdentificationCode>
                </cac:Country>
            </cac:RegistrationAddress>
        </cac:PartyLegalEntity>
    </cac:Party>
</cac:AccountingCustomerParty>
<cac:TaxTotal>
    <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxAmount>
    <cac:TaxSubtotal>
        <cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL_IGV"] . '</cbc:TaxAmount>
        <cac:TaxCategory>
            <cac:TaxScheme>
                <cbc:ID>1000</cbc:ID>
                <cbc:Name>IGV</cbc:Name>
                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
            </cac:TaxScheme>
        </cac:TaxCategory>
    </cac:TaxSubtotal>
</cac:TaxTotal>
<cac:RequestedMonetaryTotal>
   <cbc:PayableAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $cabecera["TOTAL"] . '</cbc:PayableAmount>
</cac:RequestedMonetaryTotal>';

    for ($i = 0; $i < count($detalle); $i++) {
        $xmlCPE = $xmlCPE . '<cac:DebitNoteLine>
<cbc:ID>' . $detalle[$i]["txtITEM"] . '</cbc:ID>
<cbc:DebitedQuantity unitCode="' . $detalle[$i]["txtUNIDAD_MEDIDA_DET"] . '">' . $detalle[$i]["txtCANTIDAD_DET"] . '</cbc:DebitedQuantity>
<cbc:LineExtensionAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIMPORTE_DET"] . '</cbc:LineExtensionAmount>
<cac:PricingReference>
<cac:AlternativeConditionPrice>
<cbc:PriceAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtPRECIO_DET"] . '</cbc:PriceAmount>
<cbc:PriceTypeCode>' . $detalle[$i]["txtPRECIO_TIPO_CODIGO"] . '</cbc:PriceTypeCode>
</cac:AlternativeConditionPrice>
</cac:PricingReference>
<cac:TaxTotal>
<cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIGV"] . '</cbc:TaxAmount>
<cac:TaxSubtotal>
<cbc:TaxAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtIGV"] . '</cbc:TaxAmount>
<cac:TaxCategory>
<cbc:TaxExemptionReasonCode>' . $detalle[$i]["txtCOD_TIPO_OPERACION"] . '</cbc:TaxExemptionReasonCode>
<cac:TaxScheme>
<cbc:ID>1000</cbc:ID>
<cbc:Name>IGV</cbc:Name>
<cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
</cac:TaxScheme>
</cac:TaxCategory>
</cac:TaxSubtotal>
</cac:TaxTotal>
<cac:Item>
<cbc:Description><![CDATA[' . ValidarCaracteresInv((isset($detalle[$i]["txtDESCRIPCION_DET"]))?$detalle[$i]["txtDESCRIPCION_DET"]:"") . ']]></cbc:Description>
<cac:SellersItemIdentification>
<cbc:ID><![CDATA[' . ValidarCaracteresInv((isset($detalle[$i]["txtCODIGO_DET"]))?$detalle[$i]["txtCODIGO_DET"]:"") . ']]></cbc:ID>
</cac:SellersItemIdentification>
</cac:Item>
<cac:Price>
<cbc:PriceAmount currencyID="' . $cabecera["COD_MONEDA"] . '">' . $detalle[$i]["txtPRECIO_DET"] . '</cbc:PriceAmount>
</cac:Price>
</cac:DebitNoteLine>';
    }
    $xmlCPE = $xmlCPE . '</DebitNote>';

    $doc->loadXML($xmlCPE);
    $doc->save(dirname(__FILE__) . '/' . $ruta . '.XML');

    return 'XML CREADO';
}

?>