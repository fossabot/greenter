<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 18/07/2017
 * Time: 22:27.
 */

namespace Greenter\Validator\Loader;

use Greenter\Validator\Metadata\LoaderMetadataInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Greenter\Validator\Constraint as MyAssert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class NoteLoader implements LoaderMetadataInterface
{
    public function load(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraints('tipoDoc', [
            new Assert\NotBlank(),
            new Assert\Length([
                'min' => 2,
                'max' => 2,
            ]),
        ]);
        $metadata->addPropertyConstraints('serie', [
            new Assert\NotBlank(),
            new Assert\Length(['max' => 4]),
        ]);
        $metadata->addPropertyConstraints('correlativo', [
            new Assert\NotBlank(),
            new Assert\Length(['max' => 8]),
        ]);
        $metadata->addPropertyConstraints('fechaEmision', [
            new Assert\NotBlank(),
            new Assert\DateTime(),
        ]);
        $metadata->addPropertyConstraints('tipoMoneda', [
            new Assert\NotBlank(),
            new MyAssert\Currency(),
        ]);
        $metadata->addPropertyConstraints('mtoOperGravadas', [
            new Assert\NotBlank(),
            new Assert\Type(['type' => 'numeric']),
        ]);
        $metadata->addPropertyConstraints('mtoOperInafectas', [
            new Assert\NotBlank(),
            new Assert\Type(['type' => 'numeric']),
        ]);
        $metadata->addPropertyConstraints('mtoOperExoneradas', [
            new Assert\NotBlank(),
            new Assert\Type(['type' => 'numeric']),
        ]);
        $metadata->addPropertyConstraints('mtoImpVenta', [
            new Assert\NotBlank(),
            new Assert\Type(['type' => 'numeric']),
        ]);
        $metadata->addPropertyConstraints('client', [
            new Assert\NotBlank(),
            new Assert\Valid(),
        ]);
        $metadata->addPropertyConstraints('company', [
            new Assert\NotBlank(),
            new Assert\Valid(),
        ]);
        $metadata->addPropertyConstraint('details', new Assert\Valid());
        $metadata->addPropertyConstraint('legends', new Assert\Valid());
        $metadata->addPropertyConstraint('guias', new Assert\Valid());
        $metadata->addPropertyConstraint('relDocs', new Assert\Valid());
        $metadata->addPropertyConstraint('perception', new Assert\Valid());
        $metadata->addPropertyConstraints('codMotivo', [
            new Assert\NotBlank(),
            new Assert\Length([
                'min' => 2,
                'max' => 2,
            ]),
        ]);
        $metadata->addPropertyConstraints('desMotivo', [
            new Assert\NotBlank(),
            new Assert\Length(['max' => 250]),
        ]);
        $metadata->addPropertyConstraints('tipDocAfectado', [
            new Assert\NotBlank(),
            new Assert\Length([
                'min' => 2,
                'max' => 2,
            ]),
        ]);
        $metadata->addPropertyConstraints('numDocfectado', [
            new Assert\NotBlank(),
            new Assert\Length(['max' => 13]),
        ]);
    }
}
